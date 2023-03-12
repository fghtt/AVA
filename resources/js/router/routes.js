export const routes = [
    {
        path: '/', component: () => import ('../pages/Main.vue'),
        name: 'index',
        meta: {title: 'Главная'}
    },
    {
        path: '/login', component: () => import('../pages/Login.vue'),
        name: 'login',
        meta: {title: 'Войти'}
    },
    {
        path: '/registration', component: () => import('../pages/Registration.vue'),
        name: 'registration',
        meta: {title: 'Регистрация'}
    }
]
