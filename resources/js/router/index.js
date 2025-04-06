// resources/js/router/index.js

import { createRouter, createWebHistory } from 'vue-router'

// Example components

import CategoryList from '../componennts/CategoryList.vue'

const routes = [

    {
        path: '/category',
        name: 'category',
        component: CategoryList
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
