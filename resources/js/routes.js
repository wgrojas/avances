//impotamos los componentes
const Login = () =>import('./components/Login.vue')
const Navbar = () =>import('./components/Navbar.vue')
const Register = () =>import('./components/Register.vue')
const Menu = () =>import('./components/Menu.vue')

//importamos los componentes para profesionales
const Historial = () =>import('./components/profesional/Historial.vue')
const CrearHistorial = () =>import('./components/profesional/CrearHistorial.vue')
const EditarHistorial = () =>import('./components/profesional/EditarHistorial.vue')
const Profesional = () =>import('./components/profesional/Profesional.vue')
const Configuracion = () =>import('./components/profesional/Configuracion.vue')


export const routes=[
    {
        name:'home',
        path:'/',
        component:Navbar
    },
    {
    name:'login',
    path:'/login',
    component:Login
},
{
    name:'register',
    path:'/register',
    component:Register
},
{
    name:'menu',
    path:'/menu',
    component:Menu
},

{
    name:'historial',
    path:'/historial',
    component:Historial
},
{
    name:'crearHistorial',
    path:'/crearHistorial',
    component:CrearHistorial
},
{
    name:'editarHistorial',
    path:'/editarHistorial',
    component:EditarHistorial
},
{
    name:'profesional',
    path:'/profesional',
    component:Profesional
},
{
    name:'configuracion',
    path:'/configuracion',
    component:Configuracion
}



]
