import React from "react";

const CategoryCard = () => {
    return (
        <div className="cursor-pointer w-full h-[180px] relative overflow-hidden shadow-md transition-all delay-75 hover:opacity-70">
            {/* Background Image */}
            <div
                className="absolute inset-0 bg-cover bg-right-bottom"
                style={{
                    backgroundImage: "url('https://ae01.alicdn.com/kf/S321d687c38e749c78bf783eb4a37fc2bC.png')",
                }}
            ></div>

            {/* Overlay for Beige Section */}
            <div className="absolute inset-0 bg-gradient-to-r from-[#f8f1e9] to-transparent"></div>

            {/* Text Section */}
            <div className="absolute left-6 top-8 z-10">
                <h1 className="text-2xl font-semibold text-gray-800">
                    Home &<br/> Garden
                </h1>
            </div>
        </div>
    );
};

export default CategoryCard;
