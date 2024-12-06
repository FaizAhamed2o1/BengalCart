import React, { useState, useEffect } from "react";
import { CiHome } from "react-icons/ci";
import { GiClothes } from "react-icons/gi";
import { GiGardeningShears } from "react-icons/gi";
import { FcElectronics } from "react-icons/fc";
import { CiCamera } from "react-icons/ci";



export default function CategoryDropdown ({ onMouseEnterEvent, onMouseLeaveEvent }) {

    const cats = [
        {
            icon: <CiHome />,
            title: "Home & Appliances"
        },

        {
            icon: <GiClothes />,
            title: "Fashion & Clothes"
        },

        {
            icon: <CiCamera />,
            title: "Accessoires"
        },

        {
            icon: <GiGardeningShears />,
            title: "Gargdening"
        },

        {
            icon: <FcElectronics />,
            title: "Electronics"
        },

    ]


    return (
        <div onMouseEnter={onMouseEnterEvent} onMouseLeave={onMouseLeaveEvent}
            className="w-[15%] absolute top-[6.8rem] left-[10rem] p-3 bg-white shadow-md rounded-xl grid grid-cols-1">
            <div>
                {cats.map((cat, index) => (
                    <div
                        key={index} // Use `key` to uniquely identify each item
                        className="flex items-center gap-3 w-full p-2 cursor-pointer transition-all delay-50 hover:bg-gray-50"
                    >
                        {cat.icon}
                        <span>{cat.title}</span>
                    </div>
                ))}
            </div>


        </div>
    )
}
