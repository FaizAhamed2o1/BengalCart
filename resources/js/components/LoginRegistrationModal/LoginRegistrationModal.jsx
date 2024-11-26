import React, { useEffect } from "react";
import { IoMdClose } from "react-icons/io";
import { IoShieldCheckmark } from "react-icons/io5";
import { IoPricetagSharp } from "react-icons/io5";
import { Link } from "react-router-dom";

const LoginRegistrationModal = ({ handleCloseModal }) => {
    useEffect(() => {
        // to hide and disable scroll when modal is open
        document.body.style.overflowY = "hidden";

        // cleanup function to define what to do when modal is unmounted
        return () => {
            document.body.style.overflowY = "auto";
        };
    }, []);

    return (
        <>
            <div
                className="wrapper fixed left-0 right-0 bottom-0 top-0 bg-[#BDBDBDCC] "
                onClick={handleCloseModal}
            ></div>

            <div className="content top-1/2 left-1/2 fixed max-w-lg -translate-x-1/2 -translate-y-1/2 bg-white">
                {/* actual content for the modal */}
                <div className="px-14 relative pt-12 pb-6 text-center">
                    <button
                        className="top-5 right-5 absolute text-2xl"
                        onClick={handleCloseModal}
                    >
                        <IoMdClose />
                    </button>

                    <h2>Register/Sign in</h2>
                    <p>
                        <span>
                            <IoShieldCheckmark />
                        </span>
                        Your information is protected
                    </p>

                    <p>
                        <span>
                            <IoPricetagSharp />
                        </span>
                        New shoppers get up to 70% off
                    </p>

                    <div>
                        <input
                            type="email"
                            name=""
                            id=""
                            className="w-full border outline-none"
                            placeholder="Email"
                        />

                        <button>Continue</button>
                    </div>

                    <Link>
                        <p className="text-customGray underline">
                            Trouble signing in?
                        </p>
                    </Link>

                    <div class="flex items-center justify-center">
                        <div class="flex-grow h-px bg-gray-300 mt-1"></div>
                        <span class="px-3 text-customGray">
                            Or continue with
                        </span>
                        <div class="flex-grow h-px bg-gray-300 mt-1"></div>
                    </div>

                    {/* Login methods */}
                    <div className="flex items-center justify-between">
                        <p>fb</p>
                        <p>google</p>
                        <p>twitter</p>
                        <p>apple</p>
                    </div>

                    <p>
                        By continuing, you confirm that you‘re an adult and
                        you’ve read and accepted our AliExpress Free Membership
                        Agreement and Privacy Policy.
                    </p>
                </div>
            </div>
        </>
    );
};

export default LoginRegistrationModal;
