import axios from "axios";

const auth = {
    state: {
        user: {}
    },
    getters: {
        user (state) {
            return JSON.parse(state.user)
        }
    },
    mutations: {
        set_user (state, data) {
            state.user = data
        }
    },
    actions: {
        login ({dispatch, commit}, payload) {
            axios.get('/sanctum/csrf-cookie').then(res => {
                axios.post('/login', payload)
                    .then(res => {
                        localStorage.setItem('x-xsrf-token', res.config.headers['X-XSRF-TOKEN'])
                    })
            })
        },
        async setUser ({dispatch, commit}) {
            if (localStorage.getItem('user')) {
                commit('set_user', localStorage.getItem('user'))
                return
            }

            await axios.get('/api/user', {
                headers: {
                    'X-XSRF-TOKEN': localStorage.getItem('x-xsrf-token')
                }
            }).then(res => {
                localStorage.setItem('user', JSON.stringify(res.data))
                commit('set_user', localStorage.getItem('user'))
            })
        }
    }
}

export default auth
