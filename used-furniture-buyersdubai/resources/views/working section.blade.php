 <style>
        /* Main color variables */
        :root {
            --primary-orange: orangered;
            --dark-orange: orangered;
            --primary-red: orangered;
            --dark-red: orangered;
            --black: #333;
            --white: #fff;
            --light-gray: #f9f9f9;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--black);
        }
        
        .process-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background-color: var(--light-gray);
        }
        
        .process-content {
            flex: 1;
            min-width: 300px;
            padding: 0 30px;
        }
        
        .process-image {
            flex: 1;
            min-width: 300px;
                    height: 500px;
            padding: 20px;
        }
        
        .process-image img {
            width: 100%;
            border-radius: 8px;
                    height: 500px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            color: var(--primary-red);
            font-size: 36px;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
            text-transform: uppercase;
        }
        
        
        
        .process-steps {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .process-step {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }
        
        .step-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary-orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 24px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        
        .process-step:hover .step-icon {
            background-color: var(--dark-red);
            transform: scale(1.1);
        }
        
        .step-content h3 {
            color: var(--dark-orange);
            margin: 0 0 8px 0;
            font-size: 20px;
        }
        
        .step-content p {
            margin: 0;
            color: var(--black);
            line-height: 1.5;
        }
        
        @media (max-width: 768px) {
            .process-section {
                flex-direction: column;
            }
            
            .process-content {
                order: 2;
                padding: 30px 15px;
            }
            
           .process-image {
        order: 1;
        padding: 15px;
        height: auto; /* added */
    }

    .process-image img {
        height: auto; /* added */
        max-height: 300px; /* optional, limit height for mobile look */
        object-fit: cover; /* optional, keeps aspect ratio neat */
    }
            
            .section-title {
                font-size: 28px;
                text-align: center;
            }
            
          
        }
    </style>
    <!-- Using Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="process-section">
        <div class="process-content">
  <h2 class="mb-4" style="color: var(--primary-red); font-weight: 600; text-align:center">Our Work Process</h2>            
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="step-content">
                        <h3>1. Contact Us</h3>
                        <p>Call or message us with details of your furniture or appliances for a free quote.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="step-content">
                        <h3>2. Schedule Pickup</h3>
                        <p>We arrange a convenient time for inspection and pickup at your location.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="step-content">
                        <h3>3. Fast Pickup</h3>
                        <p>Our team arrives on time, evaluates your items, and loads them professionally.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="step-content">
                        <h3>4. Cash Payment</h3>
                        <p>Receive instant cash payment on the spot before we leave your premises.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="process-image">
            <img src="images/working.webp" alt="Our team picking up used furniture in Dubai">
        </div>
    </section>