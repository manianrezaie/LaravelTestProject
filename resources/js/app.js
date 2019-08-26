require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

import PlayerComponent from './components/PlayerComponent.vue';
import TeamComponent from './components/TeamComponent.vue';
import HomeComponent from './components/HomeComponent.vue';
import PlayerListComponent from './components/PlayerListComponent.vue';
import TeamListComponent from './components/TeamListComponent.vue';

Vue.component('players-component', require('./components/PlayersComponent.vue').default);
Vue.component('teams-component', require('./components/TeamsComponent.vue').default);
Vue.component('player-component', require('./components/PlayerComponent.vue').default);
Vue.component('team-component', require('./components/TeamComponent.vue').default);
Vue.component('small-team-list-component', require('./components/SmallTeamListComponent.vue').default);
Vue.component('small-player-list-component', require('./components/SmallPlayerListComponent.vue').default);

const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'listAllPlayers',
        path: '/players',
        component: PlayerListComponent
    },
    {
        name: 'viewPlayer',
        path: '/player/:id',
        component: PlayerComponent,
        props: true
    },
    {
        name: 'listAllTeams',
        path: '/teams',
        component: TeamListComponent
    },
    {
        name: 'viewTeam',
        path: '/team/:id',
        component: TeamComponent,
        props: true
    }
];
const router = new VueRouter({mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({router})).$mount('#app');