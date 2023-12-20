import { createBrowserRouter } from "react-router-dom";

import { GuestSkin } from "../skins/Guest";
import { GuardSkin } from "../skins/Guard";

import { LoginPage } from "../pages/Login";
import { DashboardPage } from "../pages/Dashboard";

const routes = createBrowserRouter([
    {
        path: "/",
        element: <GuestSkin />,
        children: [
            {
                path: "/",
                element: <LoginPage />,
            },
        ],
    },
    {
        path: "/",
        element: <GuardSkin />,
        children: [
            {
                path: "/dashboard/:id/:page",
                element: <DashboardPage />,
            },
        ],
    },
]);

export default routes;
