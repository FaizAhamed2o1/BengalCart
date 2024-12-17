import React from "react";
import {Link} from "react-router-dom";


export default function Banner ({ imgLink }) {
    return (
        <div className="w-full">
            <img src={imgLink} className="object-center w-full h-[40vh]" alt=""/>

            {/*button section*/}
            {/*<Link to={"/"} className="fixed bottom-5 text-sm md:text-lg md:bottom-[29rem] left-3 md:left-14 p-1 md:p-2 bg-blue-600 rounded shadow-md w-[120px] md:w-[220px] text-center text-white transition-all delay-50 duration-75 hover:bg-blue-700">*/}
            {/*    SHOP NOW*/}
            {/*</Link>*/}
        </div>
    )
}
