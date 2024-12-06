import React from "react";
import Banner from "../../components/MainBanner/Banner.jsx";
import CampaignSection from "../../components/CampaignComponents/CampaignSection.jsx";

const Home = () => {
    return (
        <div className="relative w-full">
            {/*Banner Section*/}
            <Banner imgLink="https://cdn1.vectorstock.com/i/1000x1000/76/65/buy-2-get-1-free-campaign-promotion-sale-banner-vector-32267665.jpg" />

            <CampaignSection
                title="Super Deals"
                sectionTitle1={"SuperDeals"}
                sectionTitle2={"Special Offers"}
            />

        </div>
    );
};

export default Home;
