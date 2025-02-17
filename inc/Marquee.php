<style>
    /* Tailwind Custom Animation */
    @keyframes scroll-left {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    /* Apply Animation */
    .scrolling-text {
        animation: scroll-left 10s linear infinite;
    }

    .marquee-container {
        display: flex;
        width: 100%;
        flex-shrink: 0;
    }

    /* Styling for the scrolling text */
    .scrolling-text-container {
        display: flex;
        overflow: hidden;
        justify-content: center;
    }

    /* Add a subtle shadow for better text visibility */
    .scrolling-text {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>

<div class="relative overflow-hidden w-full bg-indigo-600">
    <div class="scrolling-text-container">
        <div class="marquee-container">
            <div class="scrolling-text text-white font-bold text-2xl py-2 px-4 whitespace-nowrap">
                Get Your Trial with Dentigo
            </div>
            <div class="scrolling-text text-white font-bold text-2xl py-2 px-4 whitespace-nowrap">
                Get Your Trial with Dentigo
            </div>
        </div>
    </div>
</div>
