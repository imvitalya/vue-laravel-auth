<template>
  <form @submit.prevent="submit" class='col-lg-4 col-md-10 mx-auto mt-5'>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" v-model="form.name">
        <small id="helpId" class="text-muted">place enter your name</small>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" v-model="form.email">
        <small id="helpId" class="text-muted">place enter your email</small>
    </div>
    <div class="form-group">
        <label for="">Passowrd</label>
        <input type="password" name="password" class="form-control" v-model="form.password">
        <small id="helpId" class="text-muted">place enter your password</small>
    </div>
    <hr>
    <div class="form-group">
        <button type="submit" class="btn btn-primary w-100">Send data</button>
    </div>


  </form>
</template>

<script>
  import { mapActions } from 'vuex'

  export default 
  {
    name: 'signup',
    components: 
    {
      //
    },
    
    data () 
    {
      return {
        form: {
          name: '',
          email: '',
          password: '',
        }
      }
    },

    methods: 
    {
      ...mapActions(
        {
          signUp: 'auth/signUp'
        }
      ),

      submit ()
      {
        this.signUp(this.form).then(() =>
        {
          this.$router.replace(
            {
              name: 'dashboard'
            }
          )
        }).catch( () => 
        {
          console.log('field')
        })
      }
    }
  }
</script>
