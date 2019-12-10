import axios from 'axios';

export default {
  
  actions: {
    async byId ({ dispatch })
    {
        let response = await axios.post('/view/byId');
        return dispatch('attempt', response.data.users);
    },

    async signUp ({ dispatch }, credentials)
    {
        let response = await axios.post('/auth/signup', credentials);
        
        return dispatch('attempt', response.data.token);
    },

  }
}
