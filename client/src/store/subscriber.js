import store from '@/store'
import axios from 'axios'

store.subscribe((mytation) => 
{
    switch (mytation.type)
    {
        case 'auth/SET_TOKEN':
            if (mytation.payload)
            {
                axios.defaults.headers.common['Authorization'] = `Bearer ${mytation.payload}`
                localStorage.setItem('token', mytation.payload)
            }
            else
            {
                axios.defaults.headers.common['Authorization'] = null
                localStorage.removeItem('token')
            }
            break;
    }
})