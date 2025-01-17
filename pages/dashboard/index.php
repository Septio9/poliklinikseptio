<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 0;
        }

        .title {
            font-size: 1rem;
            /* Responsive font size */
            color: #000;
            margin-bottom: 1.25rem;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 0.1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .banner-section {
            font-family: 'Sora', sans-serif;
            background-color: #b4c6d0;
            color: #00000;
            padding: 10% 0;
            /* Responsive padding */
            text-align: center;
            display: flex;
            /* Use flexbox to center content */
            flex-direction: column;
            /* Stack content vertically */
            align-items: center;
            /* Center content horizontally */
            justify-content: center;
            /* Center content vertically */
            height: 100vh;
            /* Set height to 100% of viewport height */
        }

        .floating-container {
            background-color: #F5F5F5;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            margin: -8% auto 0;
            /* Responsive margin */
            max-width: 75%;
            /* Responsive width */
        }

        .floating-container {
            background-color: #F5F5F5;
            /* Light grey background */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            /* Box-shadow for depth */
            margin: -12% auto 0;
            /* Increased negative top margin for more overlap */
            padding: 2rem 1rem;
            /* Reduced padding for less height */
            text-align: center;
            /* Center text */
            display: flex;
            /* Use flexbox to center items */
            align-items: center;
            /* Center items vertically */
            justify-content: center;
            /* Center items horizontally */
            flex-direction: column;
            /* Stack items vertically */
            max-width: 80%;
            /* Maximum width */
        }

        .floating-word {
            display: flex;
            /* Use flexbox for the inner row */
            justify-content: center;
            /* Center content horizontally */
            align-items: center;
            /* Center content vertically */
            flex-wrap: wrap;
            /* Allow items to wrap on small screens */
            gap: 5rem;
            /* Space between items */
        }

        .floating-word>div {
            flex: 1;
            /* Flex-grow to fill space */
            max-width: 200px;
            /* Maximum width for each column */
            min-width: 150px;
            /* Minimum width for each column */
        }

        .floating-word img {
            max-height: 100px;
            /* Maximum height for images */
            width: auto;
            /* Maintain aspect ratio */
            margin-bottom: 1rem;
            /* Space between image and text */
        }


        .tagline p {
            font-size: 1.5rem;
            /* Responsive font size */
            color: #000;
        }

        .galeri-container {
            width: 100%;
            max-width: 18rem;
            margin: 1rem;
            display: inline-block;
            /* Changed to inline-block for better responsiveness */
        }

        .galeri-img-top {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 1.5rem;
                /* Smaller font size for smaller screens */
            }

            .tagline p {
                font-size: 1.2rem;
                /* Smaller font size for smaller screens */
            }

            .floating-container {
                margin-top: -25%;
                /* Increased negative margin for better overlap */
            }
        }
    </style>
</head>

<body>

    <!-- Tambahkan div yang diminta di sini -->
    <div class="row mb-4">
        <div class="col-12">
            <div style="background-image: url('assets/images/gedung2.jpg'); background-size: cover; height: 250px; position: relative;">
            </div>
        </div>
    </section>
</body>

</html>