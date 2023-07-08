const menuAdmin = [
    {
        name: 'Dashborad',
        nameMenu: "Dashborad",
        path: '/admin/dashboard',
        children: [],
    },
    {
        name: 'Admin',
        nameMenu: "Administrador",
        path: '',
        children: [
            { 
                path: '/admin/users', 
                name: 'Users', 
                nameMenu: "Usuários",
            },
            { 
                path: '/admin/permissions', 
                name: 'UsersPermissions', 
                nameMenu: "Permissões",
            }
        ],
    }
];

export default menuAdmin;