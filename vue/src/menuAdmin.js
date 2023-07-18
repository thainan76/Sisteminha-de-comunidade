const menuAdmin = [
    {
        name: 'Dashborad',
        nameMenu: "Dashborad",
        path: '/admin/dashboard',
        private: false,
        children: [],
    },
    {
        name: 'AdminUsers',
        nameMenu: "Administrar usuários",
        path: '',
        private: true,
        children: [
            { 
                path: '/admin/students', 
                name: 'Students', 
                nameMenu: "Alunos",
                private: false,
            },
            { 
                path: '/admin/users', 
                name: 'Users', 
                nameMenu: "Usuários",
                private: true,
            },
            { 
                path: '/admin/permissions', 
                name: 'UsersPermissions', 
                nameMenu: "Permissões",
                private: true,
            },
        ],
    },
    {
        name: 'AdminCourses',
        nameMenu: "Administrar cursos",
        path: '',
        private: false,
        children: [
            { 
                path: '/admin/courses', 
                name: 'Cursos', 
                nameMenu: "Cursos",
                private: false,
            },
        ]
    },
    {
        name: 'MyCourses',
        nameMenu: "Meus cursos",
        path: '/admin/myCourses',
        private: false,
        children: []
    },
    {
        name: 'Invoices',
        nameMenu: "Faturas",
        path: '/admin/invoices',
        private: false,
        children: []
    },
    {
        name: 'Settings',
        nameMenu: "Configurações",
        path: '/admin/configuration',
        private: false,
        children: []
    }
];

export default menuAdmin;