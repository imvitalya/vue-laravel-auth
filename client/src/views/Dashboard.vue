<template>

  <div class="row mt-5">

    <div class="input-group col-lg-9 col-md-12 mx-auto ml-0 mr-0 pl-0 pr-0">
      <input type="text" class="form-control">
      <div class="input-group-append">
        <button class="btn btn-secondary" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>

    <table class="col-lg-9 col-md-12 mx-auto table table-bordered mt-5">
      <thead>
        <tr>
          <th style="width: 20%;">
            <button type="button" class="btn btn-sm btn-outline-secondary w-100" @click.prevent="getBy('http://127.0.0.1:8000/api/view/byId')">
              <i class="fas fa-id-card-alt"></i>
            </button>
          </th>
          <th style="width: 20%;">
            <button type="button" class="btn btn-sm btn-outline-secondary w-100" @click.prevent="getBy('http://127.0.0.1:8000/api/view/byName')">
              <i class="fas fa-signature"></i> Names
            </button>
          </th>
          <th style="width: 20%;">
            <button type="button" class="btn btn-sm btn-outline-secondary w-100" @click.prevent="getBy('http://127.0.0.1:8000/api/view/byEmail')">
              <i class="far fa-envelope"></i> E-mails
            </button>
          </th>
        </tr>
      </thead>
      <tbody class="text-left">
        <tr v-for="user in users" :key="user.id">
          <td>
            {{ user.id }}
          </td>
          <td>
            {{ user.name }}
          </td>
          <td>
            {{ user.email }}
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  //Ну типа тут я не стал выносить отдельно как с auth.js 

  import axios from 'axios';

  export default {
    name: 'dashboard',
    data () 
    {
      return {
        users: null,
      };
    },
    methods:
    {
      getBy (path) 
      {
        axios
        .get(path)
        .then(response => {
          this.users = response.data.users
        });
      },
    },
    mounted () 
    {
      axios
      .get('http://127.0.0.1:8000/api/view/')
      .then(response => {
        this.users = response.data.users.data
      });
    }
  }
</script>