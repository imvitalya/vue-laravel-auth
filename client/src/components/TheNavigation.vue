<template>
    <div class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <router-link
                    :to = "{
                        name: 'home',
                    }"

                    class="navbar-brand"
                >
                <i class="fab fa-laravel fa-2x"></i> <template v-if="authenticated">hi, {{ user.name }}!</template><template v-else>Laravel and Vue</template>
                </router-link>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                        <template v-if="!authenticated">
                            <li class="nav-item">
                                <router-link
                                    :to = "{
                                        name: 'signin',
                                    }"

                                    class="nav-link"
                                >
                                Sign in <i class="fas fa-sign-in-alt"></i>
                                </router-link>
                            </li>
                            
                            <li class="nav-item ml-4">
                                <router-link
                                    :to = "{
                                        name: 'signup',
                                    }"

                                    class="nav-link"
                                >
                                Sign up <i class="fas fa-user-plus"></i>
                                </router-link>
                            </li>
                        </template>
                        <template v-else>
                            <li class="nav-item">
                                <router-link
                                    :to = "{
                                        name: 'dashboard',
                                    }"

                                    class="nav-link"
                                >
                                <i class="fas fa-columns"></i> Dashboard 
                                </router-link>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#" @click.prevent="signOut">
                                        Sign out <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                </div>
                            </li>
                        </template>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>

    import { mapGetters, mapActions } from 'vuex'

    export default 
    {
        computed: 
        {
            ...mapGetters(
                {
                    authenticated: 'auth/authenticated',
                    user: 'auth/user',
                }
            )
        },

        methods: 
        {
            ...mapActions(
                {
                    signOutAction: 'auth/signOut'
                }
            ),

            signOut ()
            {
                this.signOutAction().then( () => 
                {
                    this.$router.replase(
                        {
                            name: 'home'
                        }
                    )
                })
            }
        }
    }

</script>