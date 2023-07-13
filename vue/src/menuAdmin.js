const menuAdmin = [
    {
        name: 'Dashborad',
        nameMenu: "Dashborad",
        path: '/admin/dashboard',
        private: false,
        children: [],
    },
    {
        name: 'Admin',
        nameMenu: "Administrador",
        path: '',
        private: true,
        children: [
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
            }
        ],
    }
];

export default menuAdmin;