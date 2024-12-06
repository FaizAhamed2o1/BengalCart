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
        <div
            onMouseEnter={onMouseEnterEvent}
            onMouseLeave={onMouseLeaveEvent}
            className="absolute top-[9rem] left-[2rem] xl:top-[8rem] 2xl:top-[6.8rem] md:left-[10rem] lg:left-[10rem] p-3 bg-white shadow-md rounded-xl grid grid-cols-1 w-[90%] md:w-[60%] lg:w-[30%] xl:w-[20%] max-w-[300px] transition-all duration-300"
        >
            <div>
                {cats.map((cat, index) => (
                    <div
                        key={index} // Use `key` to uniquely identify each item
                        className="flex items-center gap-3 w-full p-2 cursor-pointer transition-all delay-50 hover:bg-gray-50"
                    >
                        {cat.icon}
                        <span className="text-sm md:text-base lg:text-sm">{cat.title}</span>
                    </div>
                ))}
            </div>
        </div>

    )
}
