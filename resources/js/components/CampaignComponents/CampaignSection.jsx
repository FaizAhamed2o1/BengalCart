import React from 'react';
import {Link} from "react-router-dom";
import CampaignProductCard from "./CampaignProductCard.jsx";
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';


export default function CampaignSection ({ title, sectionTitle1, sectionTitle2 }) {
    return (
        <div className="">
            <p className="text-center text-xl my-[4rem]">
                {title}
            </p>
            <div className="container mx-auto w-full">
                <div className="flex items-center gap-5">
                    <div className="transition-all delay-50 hover:bg-gray-50 border w-[50%] p-3">
                        <p className="text-center text-2xl font-bold">{sectionTitle1}</p>
                        <div
                            className="w-[30%] container mx-auto bg-rose-500 rounded-full transition-all hover:bg-rose-600">
                            <Link to={"/"} className="text-white my-5 p-3 flex items-center justify-center gap-3 ">
                                10:00:00 left
                            </Link>
                        </div>

                        <div className="w-full flex items-center gap-5">
                            <Swiper
                                modules={[Navigation, Pagination, Scrollbar, A11y]}
                                spaceBetween={50}
                                slidesPerView={3}
                                navigation
                                pagination={{clickable: true}}
                                onSlideChange={() => console.log('slide change')}
                                onSwiper={(swiper) => console.log(swiper)}
                            >
                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://ae-pic-a1.aliexpress-media.com/kf/Ad38eab3363b34bd8b618fc7df6d1255ds.jpg_480x480.jpg_.webp"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>


                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://ae-pic-a1.aliexpress-media.com/kf/S9a4326915a774f2ea01e99ea2aa9e0dee.jpg_480x480.jpg_.webp"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>

                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-16-Plus---16-Ultramarine-6297.jpg"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>

                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-16-Plus---16-Ultramarine-6297.jpg"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>
                            </Swiper>
                        </div>

                    </div>
                    <div className="transition-all delay-50 hover:bg-gray-50 border w-[50%] p-3">
                        <p className="text-center text-2xl font-bold">{sectionTitle1}</p>
                        <div
                            className="w-[30%] container mx-auto bg-rose-500 rounded-full transition-all hover:bg-rose-600">
                            <Link to={"/"} className="text-white my-5 p-3 flex items-center justify-center gap-3 ">
                                10:00:00 left
                            </Link>
                        </div>

                        <div className="w-full flex items-center gap-5">
                            <Swiper
                                modules={[Navigation, Pagination, Scrollbar, A11y]}
                                spaceBetween={50}
                                slidesPerView={3}
                                navigation
                                pagination={{clickable: true}}
                                onSlideChange={() => console.log('slide change')}
                                onSwiper={(swiper) => console.log(swiper)}
                            >
                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-16-Plus---16-Ultramarine-6297.jpg"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>


                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-16-Plus---16-Ultramarine-6297.jpg"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>

                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-16-Plus---16-Ultramarine-6297.jpg"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>

                                <SwiperSlide>
                                    <CampaignProductCard
                                        img={"https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-16-Plus---16-Ultramarine-6297.jpg"}
                                        title={"iPhone 16 Pro Max"}
                                        price={"$1600.00"}
                                        discountedPrice={"$990.00"}
                                        discount={"40%"}
                                    />
                                </SwiperSlide>
                            </Swiper>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    )
}
