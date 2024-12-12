import React from 'react';

export default function ShopByCategoryProductCard({ image }){
    return (
        <div className="w-full border shadow-md overflow-hidden bg-white p-3 transition-all cursor-pointer delay-75 hover:-translate-y-2">
            {/* Product Image */}
            <div className="relative">
                <img
                    src={image}
                    alt="Product"
                    className="w-full h-72 object-cover"
                />
            </div>

            {/* Product Details */}
            <div className="p-4 border-t">
                {/* Price Section */}
                <div className="text-lg font-semibold text-gray-800">BDT2,086.67</div>
                <div className="text-gray-400 line-through text-sm">BDT4,536.44</div>

                {/* Rating and Sales */}
                <div className="flex items-center mt-2 text-sm text-gray-600">
                    {/* Star Icon */}
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        className="w-4 h-4 text-yellow-400"
                    >
                        <path
                            d="M12 .587l3.668 7.568L24 9.432l-6 5.845 1.42 8.318L12 18.897l-7.42 4.698L6 15.277.003 9.432l8.333-1.277L12 .587z"/>
                    </svg>
                    <span className="ml-1 font-semibold text-gray-800">4.6</span>
                    <span className="ml-2 text-gray-500">|</span>
                    <span className="ml-2">90 sold</span>
                </div>
            </div>
        </div>
    )
}
