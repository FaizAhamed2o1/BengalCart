import React, { useEffect, useState } from 'react';
import { CiMenuBurger } from "react-icons/ci";
import { MdOutlineKeyboardArrowDown } from "react-icons/md";
import {Link} from "react-router-dom";
import CategoryDropdown from "@/components/CategoryHeader/CategoryDropdown.jsx";


export default function CategoryHeader () {
    const categories = ["Category 1",
        "Category 2",
        "Category 3",
        "Category 4",
        "Category 5",
        "Category 6",
        "Category 7",
        "Category 8",
        // "Category 9",
        // "Category 10"
    ];

    const [ showDropdown, setDropdown ] = useState(false);

    const handleMouseEnter = () => setDropdown(true);
    const handleMouseLeave = () => setDropdown(false);

    return (
        <div className="p-5 w-full h-full flex items-center justify-start gap-5 container mx-0 my-3">
            <div
                onMouseEnter={handleMouseEnter}
                onMouseLeave={handleMouseLeave}
                className="text-md flex items-center gap-4 bg-white rounded-full shadow-md p-2 w-[220px] justify-center cursor-pointer transition-all delay-150 hover:font-bold">
                <CiMenuBurger
                    className="cursor-pointer text-xl"
                />
                CATEGORIES
                <MdOutlineKeyboardArrowDown className="cursor-pointer text-xl"/>

            </div>
            {
                showDropdown &&  <CategoryDropdown
                    onMouseEnterEvent={handleMouseEnter}
                    onMouseLeaveEvent={handleMouseLeave}
                />
            }


            <div className="w-full flex flex-wrap gap-4">
                {categories.map((category, index) => (
                    <div
                        key={index}
                        className="pointer-cursor text-white text-sm transition-all delay-50 rounded-full hover:bg-gray-50 hover:text-black p-2 w-[140px] text-center"
                    >
                        <Link to={"/"}>{category}</Link>
                    </div>
                ))}
            </div>

        </div>
    )
}
