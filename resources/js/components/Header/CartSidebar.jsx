import React, { useState } from "react";

const CartSidebar = ({ isOpen, onClose }) => {
    return (
        <div
            className={`fixed top-0 right-0 h-full w-80 bg-white shadow-lg transform transition-transform duration-300 ${
                isOpen ? "translate-x-0" : "translate-x-full"
            }`}
        >
            <button
                className="absolute top-3 right-3 text-xl font-bold"
                onClick={onClose}
            >
                ✕
            </button>
            <div className="p-5">
                <h3 className="text-2xl font-semibold mb-4">Your Cart</h3>
                {/* Cart items go here */}
                <p>No items in the cart yet.</p>
            </div>
        </div>
    );
};

export default CartSidebar;
