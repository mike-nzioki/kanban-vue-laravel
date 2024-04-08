import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from '../views/LoginView.vue'
import ProjectView from '../views/ProjectView.vue'
import DashboardView from '../views/HomeView.vue'
import KanbanView from '@/components/KanbanComponent.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/login',
    name: 'Login',
    component: LoginView
  },
  {
    path: '/',
    name: 'Dashboard',
    meta: { requiresAuth: false },
    component: DashboardView,
    children: [
      {
        path: '/kanban',
        name: 'Dashboard',
        meta: { requiresAuth: false },
        component: KanbanView,
      },
      {
        path: '/projects',
        name: 'Projects',
        component: ProjectView
      },
    ],
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
    }
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
