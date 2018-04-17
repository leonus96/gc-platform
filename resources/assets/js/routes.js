import LoginLayout from './components/layouts/LoginLayout';
import DashBoardLayout from './components/layouts/DashboardLayout';

const routes = [
    {
        path: '/login',
        component: LoginLayout
    },
    {path: '/resumen', component: DashBoardLayout}
];

export default routes;