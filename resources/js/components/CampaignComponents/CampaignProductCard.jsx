import React, { useEffect, useState } from "react";

export default function CampaignProductCard ({ img, title, price, discountedPrice, discount }) {
    return (
        <div className="p-4 h-[400px] border rounded-xl w-60 flex flex-col items-start gap-2 bg-white">
            <div className="h-[]">
                <img src={img} alt="" className="object-cover h-[200px] w-full"/>
            </div>

            <div className=" flex flex-col gap-3">
                <div className="text-xl font-bold">
                    {title}
                </div>

                <div>

                    <del>{price}</del>

                </div>

                <div>
                    {discountedPrice}
                </div>

                <div className="text-sm text-white bg-red-500 w-[30%] text-center">
                    {discount}
                </div>
            </div>

        </div>
    )
}
