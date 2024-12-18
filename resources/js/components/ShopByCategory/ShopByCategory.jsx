import React, { useEffect, useState } from 'react';
import {Link} from "react-router-dom";
import p1 from '../../assets/p1.avif';
import ShopByCategoryProductCard from "./ShopByCategoryProductCard.jsx";
import CategoryCard from "./CategoryCard.jsx";

export default function ShopByCategory () {
    return (
        <div className="py-5">
            <h1 className="text-center text-2xl font-semibold py-5">Shop By Category</h1>

            <div className="flex flex-col md:flex-row items-start gap-5 w-full container mx-auto w-[90%]">
                <div className="w-full border rounded shadow-md bg-no-repeat bg-center bg-cover bg-[url('https://www.dhresource.com/webp/m/f3/decorate/jc/n/09/50a2617d-964d-4cfe-a1ad-6c7e8659938f.jpg')]">
                    <div className="container mx-auto h-full w-full p-5">
                        <p className="my-5 text-md font-semibold">Your Fashion Choice</p>
                        <Link className="bg-white p-3 font-semibold text-lg"
                              to={"#"}>SHOP NOW</Link>
                    </div>

                    <div className="p-3 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-3">
                        <ShopByCategoryProductCard
                            image={p1}
                        />
                        <ShopByCategoryProductCard
                            image={p1}
                        />
                        <ShopByCategoryProductCard
                            image={p1}
                        />
                    </div>

                </div>
                <div className="w-full rounded shadow-md p-3 md:p-0">
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <CategoryCard />
                        <CategoryCard />
                        <CategoryCard />
                        <CategoryCard />
                        <CategoryCard />
                        <CategoryCard />
                    </div>
                </div>
            </div>
        </div>
    )
}
