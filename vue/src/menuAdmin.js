const menuAdmin = [
    {
        name: 'Dashborad',
        nameMenu: "Dashborad",
        path: '/admin/dashboard',
        private: false,
        children: [],
        classIcon: "dashboard",
    },
    {
        name: 'Community',
        nameMenu: "Comunidade",
        path: '/admin/community',
        private: false,
        children: [],
        classIcon: "forum",
    },
    {
        name: 'AdminUsers',
        nameMenu: "Administrar usuários",
        path: '',
        private: true,
        classIcon: "shield_person",
        children: [
            { 
                path: '/admin/students', 
                name: 'Students', 
                nameMenu: "Alunos",
                private: false,
                classIcon: "school",
            },
            { 
                path: '/admin/users', 
                name: 'Users', 
                nameMenu: "Usuários",
                private: true,
                classIcon: "groups",
            },
            { 
                path: '/admin/permissions', 
                name: 'UsersPermissions', 
                nameMenu: "Permissões",
                private: true,
                classIcon: "how_to_reg",
            },
        ],
    },
    {
        name: 'AdminCourses',
        nameMenu: "Administrar cursos",
        path: '',
        private: false,
        classIcon: "playlist_add_check",
        children: [
            { 
                path: '/admin/courses', 
                name: 'Courses', 
                nameMenu: "Cursos",
                private: false,
                classIcon: "smart_display",
            },
        ]
    },
    {
        name: 'MyCourses',
        nameMenu: "Meus cursos",
        path: '/admin/myCourses',
        private: false,
        classIcon: "video_library",
        children: []
    },
    {
        name: 'Invoices',
        nameMenu: "Faturas",
        classIcon: "payments",
        path: '/admin/invoices',
        private: false,
        children: []
    },
    {
        name: 'Settings',
        nameMenu: "Configurações",
        path: '/admin/configuration',
        private: false,
        classIcon: "settings",
        children: []
    }
];

export default menuAdmin;