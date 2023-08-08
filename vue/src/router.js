import { createWebHistory, createRouter } from "vue-router";
import storeUser from "./components/store/storeUser.js";
import Home from "./components/HomeComponent.vue";
import Login from "./components/login/LoginComponent.vue";
import Admin from "./components/admin/AdminComponent.vue";
import Dashboard from "./components/admin/dashboard/DashboardComponent.vue";
import Users from "./components/admin/users/UsersComponent.vue";
import UsersForm from "./components/admin/users/UsersFormComponent.vue";
import UsersPermissions from "./components/admin/users/usersPermissions/UsersPermissionsComponent.vue";
import UsersPermissionsForm from "./components/admin/users/usersPermissions/UsersPermissionsFormComponent.vue";
import MyProfile from "@/components/admin/myProfile/MyProfileComponent.vue";
import Page403 from "@/components/admin/errors/Error-403.vue";
import Courses from "@/components/admin/courses/CoursesComponent.vue";
import CoursesForms from "@/components/admin/courses/CoursesFormsComponent.vue";
import Community from "@/components/admin/community/CommunityComponent.vue";
import ClassesForms from "@/components/admin/courses/classes/ClassesFormsComponent.vue";

const routers = [
    {
        name: 'Home',
        path: '/',
        component: Home,
    },
    {
        name: 'Login',
        path: '/login',
        component: Login,
    },
    {
        name: 'Logout',
        path: '/logout',
        component: Login,
        meta: {
            requiresAuth: true,
        },
    },
    {
        name: 'Admin',
        path: '/admin',
        component: Admin,
        meta: {
            requiresAuth: true,
        },
        children: [
            {
                name: 'Dashborad',
                path: 'dashboard',
                component: Dashboard,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'MyProfile',
                path: 'myProfile',
                component: MyProfile,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'Users',
                path: 'users',
                component: Users,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'UsersCreate',
                path: 'users/create',
                component: UsersForm,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'UsersEdit',
                path: 'users/edit/:id',
                component: UsersForm,
                params: {
                    id: null
                },
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'UsersPermissions',
                path: 'permissions',
                component: UsersPermissions,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'UsersPermissionsCreate',
                path: 'permissions/create',
                component: UsersPermissionsForm,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'UsersPermissionsEdit',
                path: 'permissions/edit/:id',
                component: UsersPermissionsForm,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'Courses',
                path: 'courses',
                component: Courses,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'CoursesCreate',
                path: 'courses/create',
                component: CoursesForms,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'CoursesEdit',
                path: 'courses/edit/:id',
                component: CoursesForms,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'ClassesCreate',
                path: 'courses/classes/create',
                component: ClassesForms,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'Community',
                path: 'community',
                component: Community,
                meta: {
                    requiresAuth: true,
                },
            },
            {
                name: 'Error-403',
                path: 'error/403',
                component: Page403,
                meta: {
                    requiresAuth: true,
                },
            }
            
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routers,
});


router.beforeEach((to, from, next) => {
    // can't go to login with authentication
    if (to.name == 'Login' && storeUser.getters.getAuth) {
        next({ path: '/admin/dashboard' });
    }

    if (to.meta.requiresAuth) {
        if (storeUser.getters.getAuth) {
            next();
        } else {
            next({ path: '/login' });
        }
    } else {
        next();
    }
});

export default router;