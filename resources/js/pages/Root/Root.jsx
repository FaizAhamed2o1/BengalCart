import React from "react";
import Header from "../../components/Header/Header";
import { Outlet } from "react-router-dom";
import MobileHeader from "../../components/Header/MobileHeader.jsx";

const Root = () => {
    return (
        <div>
            <div className="block md:hidden">
                <MobileHeader/>
            </div>
            <div className="hidden md:block">
                <Header/>
            </div>

            <Outlet></Outlet>
        </div>
    );
};

export default Root;
