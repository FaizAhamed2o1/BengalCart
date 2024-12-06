import React from "react";
import {Link} from "react-router-dom";


export default function Banner ({ imgLink }) {
    return (
        <div className="w-full">
            <img src={imgLink} className="object-center w-full h-[40vh]" alt=""/>

            {/*button section*/}
            <Link to={"/"} className="absolute bottom-14 left-14 p-3 bg-blue-600 rounded shadow-md w-[220px] text-center text-white transition-all delay-50 duration-75 hover:bg-blue-700">
                SHOP NOW
            </Link>
        </div>
    )
}
