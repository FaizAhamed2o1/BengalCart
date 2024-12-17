import React from "react";

const MainProductCard = () => {
    return (
        <div className="w-[270px] p-4 bg-white rounded-lg shadow-lg border border-gray-200">
            {/* Product Image */}
            <div className="relative">
                <img
                    src="https://ae-pic-a1.aliexpress-media.com/kf/Sfb59ac3ccd8f4c789fe4cbcd10cba0d3W/2Pairs-Without-Ties-Elastic-Laces-No-Tie-Shoe-Laces-Press-Lock-Shoelaces-Sneaker-Kids-Adult-8MM.jpg_960x960q75.jpg_.avif"
                    alt="Product"
                    className="rounded-lg h-40 object-cover w-full"
                />
                <div className="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg">
                    <button className="p-2 bg-black text-white rounded-full hover:bg-gray-800">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            strokeWidth="2"
                            stroke="currentColor"
                            className="w-5 h-5"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                d="M3 3h2l.879 8.122M7 13h10l3.113-6.224A1 1 0 0019.178 5H6.46M7 13l-1.12 5.493A2 2 0 008.85 21h6.3a2 2 0 001.97-2.507L15 13m-8 0h8m0 0h2m-8 0h-2"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            {/* Product Info */}
            <div className="mt-4">
                <h3 className="text-sm font-semibold text-gray-800 truncate">
                    Magnetic Luxury Matte Translucent...
                </h3>
                <div className="flex items-center space-x-2 mt-1">
                    <div className="flex items-center text-yellow-500">
                        <span>★★★★★</span>
                    </div>
                    <p className="text-xs text-gray-500">10,000+ sold</p>
                    <span className="text-[9px] bg-orange-200 text-orange-800 px-2 py-0.5 rounded-lg">
            Top Selling
          </span>
                </div>
                <div className="mt-2">
                    <p className="text-lg font-bold text-gray-900">
                        BDT237.07{" "}
                        <span className="text-sm line-through text-gray-500">BDT677.58</span>
                    </p>
                    <div className="flex items-center text-xs text-red-600 font-medium">
            <span className="bg-red-100 text-red-600 px-2 py-0.5 rounded-lg">
              Sale
            </span>
                        <p className="ml-2">Save BDT440.51 - 65%</p>
                    </div>
                </div>
                <p className="mt-1 text-sm text-gray-500">Free shipping</p>
            </div>

            {/* Buttons */}
            <div className="flex justify-between mt-4">
                <button className="px-4 py-2 bg-gray-200 text-gray-700 text-[13px] rounded-lg hover:bg-gray-300">
                    See preview
                </button>
                <button className="px-4 py-2 bg-gray-200 text-gray-700 text-[13px] rounded-lg hover:bg-gray-300">
                    Similar items
                </button>
            </div>
        </div>
    );
};

export default MainProductCard;
