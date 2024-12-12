import React from "react";
import Banner from "../../components/MainBanner/Banner.jsx";
import CampaignSection from "../../components/CampaignComponents/CampaignSection.jsx";
import ShopByCategory from "../../components/ShopByCategory/ShopByCategory.jsx";
import MainProductCard from "../../components/MainProducts/MainProductCard.jsx";

const Home = () => {
    return (
        <div className="relative w-full">
            {/*Banner Section*/}
            <Banner imgLink="https://img.lazcdn.com/us/domino/c22e9295-20bf-44e5-9bec-87e32880321f_BD-1976-688.jpg_2200x2200q80.jpg" />

            <CampaignSection
                title="Super Deals"
                sectionTitle1={"SuperDeals"}
                sectionTitle2={"Special Offers"}
            />

            <ShopByCategory />
            <div className="my-5 container mx-auto w-full md:w-full p-5 md:p-0">
                <h1 className="my-5 text-2xl text-center font-semibold">More To Love</h1>

                <div className="flex flex-wrap items-center justify-center gap-5">
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                    <MainProductCard />
                </div>
            </div>


        </div>
    );
};

export default Home;
