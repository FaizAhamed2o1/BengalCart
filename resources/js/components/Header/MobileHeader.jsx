import React, { useState } from "react";
import { CiMenuBurger, CiShoppingCart } from "react-icons/ci";

export default function MobileHeader() {
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isCartOpen, setIsCartOpen] = useState(false);

    const toggleMenuSidebar = () => {
        setIsMenuOpen(!isMenuOpen);
    };

    const toggleCartSidebar = () => {
        setIsCartOpen(!isCartOpen);
    };

    return (
        <div className="bg-customBlack sticky top-0 z-40 w-full py-3">
            {/* Header Section */}
            <div className="p-3 flex items-center justify-between text-white">
                {/* Menu Burger Icon */}
                <CiMenuBurger
                    className="text-[2rem] cursor-pointer"
                    onClick={toggleMenuSidebar} // Open/Close Menu Sidebar
                />
                {/* Cart Icon */}
                <CiShoppingCart
                    className="text-[2rem] cursor-pointer"
                    onClick={toggleCartSidebar} // Open/Close Cart Sidebar
                />
            </div>

            {/* Menu Sidebar (Left) */}
            <div
                className={`fixed top-0 left-0 h-full bg-white z-50 transition-transform duration-300 ease-in-out ${
                    isMenuOpen ? "translate-x-0" : "-translate-x-full"
                } w-[50vw]`}
            >
                <div className="p-5 flex flex-col gap-4">
                    {/* Close Button */}
                    <button
                        className="self-end text-black text-[1.5rem] font-bold"
                        onClick={toggleMenuSidebar}
                    >
                        &times;
                    </button>
                    {/* Sidebar Content */}
                    <div className="text-black font-medium text-lg">Home</div>
                    <div className="text-black font-medium text-lg">Categories</div>
                    <div className="text-black font-medium text-lg">About</div>
                    <div className="text-black font-medium text-lg">Contact</div>
                </div>
            </div>

            {/* Cart Sidebar (Right) */}
            <div
                className={`fixed top-0 right-0 h-full bg-white z-50 transition-transform duration-300 ease-in-out ${
                    isCartOpen ? "translate-x-0" : "translate-x-full"
                } w-[50vw]`}
            >
                <div className="p-5 flex flex-col gap-4">
                    {/* Close Button */}
                    <button
                        className="self-start text-black text-[1.5rem] font-bold"
                        onClick={toggleCartSidebar}
                    >
                        &times;
                    </button>
                    {/* Cart Content */}
                    <div className="text-black font-medium text-lg">Your Cart is Empty</div>
                    <div className="text-black font-medium text-lg">Total: $0.00</div>
                    <button className="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Go to Checkout
                    </button>
                </div>
            </div>

            {/* Overlay (optional, for both sidebars) */}
            {(isMenuOpen || isCartOpen) && (
                <div
                    className="fixed inset-0 bg-black bg-opacity-50 z-40"
                    onClick={() => {
                        setIsMenuOpen(false);
                        setIsCartOpen(false);
                    }}
                ></div>
            )}
        </div>
    );
}
