import React from "react";

export default function CampaignProductCard({ img, title, price, discountedPrice, discount }) {
    return (
        <div className="p-4 h-[420px] border border-gray-200 rounded-xl w-full flex flex-col items-start bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
            {/* Product Image */}
            <div className="w-full rounded-lg overflow-hidden">
                <img src={img} alt={title} className="object-cover h-[220px] w-full transition-transform duration-300 hover:scale-105" />
            </div>

            {/* Product Details */}
            <div className="flex flex-col gap-3 mt-3 w-full">
                {/* Title */}
                <div className="text-lg font-semibold text-gray-800 line-clamp-2">{title}</div>

                {/* Price Section */}
                <div className="flex items-center gap-2 text-gray-600">
                    <span className="text-sm line-through">{price}</span>
                    <span className="text-lg font-bold text-gray-800">{discountedPrice}</span>
                </div>

                {/* Discount Badge */}
                <div className="text-xs text-white bg-red-500 px-3 py-1 rounded-full w-max">
                    {discount} OFF
                </div>
            </div>

            {/* Action Buttons */}
            <div className="mt-auto flex gap-2 w-full">
                <button className="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors">
                    Add to Cart
                </button>
                <button className="w-full bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 transition-colors">
                    View Details
                </button>
            </div>
        </div>
    );
}
