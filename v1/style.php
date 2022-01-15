<style>
            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
            .content {
              max-width: 1110px;
              width: 100%;
              margin: 0 auto;
              display: flex;
              align-items: start;
              gap: 0 30px;
            }
            .content-seacrh {
              position: relative; 
              top: 0;
              z-index: 3;
              width: 30%;
              background-color: #f8f9fa;
              padding: 30px 10px;
              border-radius: 6px;
              box-shadow: 0 0 15px 2px rgba(0,0,0, 0.1);
            }
            form > div > label {
              font-weight: 800;
              margin-bottom: 10px;
            }
            form > div:not(:last-child) {
              margin-bottom: 20px;
            }
            .content-list {
              width: 70%;
              display: flex;
              flex-direction: column;
              gap: 30px 0;
            }
            .content-item {
              display: flex;
              gap: 0 30px;
              padding: 0 10px 0;
              overflow: hidden;
              border-radius: 6px;
              box-shadow: 0 0 25px 3px rgba(0,0,0, 0.1);
              transition: 0.3s linear;
            }
            .content-item:hover {
              transform: translateY(-7px);
            }
            .content-left {
              padding: 10px 0 10px;
              width: 40%;
              height: 280px;
              flex-shrink: 0;
              overflow: hidden;
              position: relative;
            }
            .content-left a {
              width: 100%;
              height: 100%;
            }
            .content-image {
              width: 100%;
              height: 100%;
              overflow: hidden;
            }
            .content-image img{
              display: flex;
              border-radius: 4px;
              width: 100%;
              height: 100%;
              object-fit: cover;
              transition: 0.3s linear;
            }
            
            .content-heart i{
              display: inline-flex;
              position: absolute;
              z-index: 2;
              top: 25px;
              right: 15px;
              width: 30px;
              height: 30px;
              align-items: center;
              justify-content: center;
              background-color: black;
              color: white;
            }
            .content-read {
              position: absolute;
              top: 54%;
              left: 50%;
              transform: translate(-50%, -50%);
              text-transform: uppercase;
              color: white;
              padding: 7px 15px;
              border-radius: 7px;
              background-color: #ffcd22;
              opacity: 0;
              transition: 0.3s linear;
            }
            .content-image:hover > img {
              transform: scale(1.05);
            }
            .content-left:hover .content-read {
              opacity: 1;
              top: 50%; 
            }
            .content-right {
              width: 60%;
              padding: 20px 0 15px;
            } 
            .content-title {
              max-width: 92%;
              display: block;
              font-size: 16px;
              font-weight: 700;
              line-height: 1.4;
              margin-bottom: 7px;
              white-space: nowrap;
              overflow: hidden;
              text-overflow: ellipsis;
            }
            .content-adress {
              display: block;
              display: flex;
              gap: 0 7px;
              align-items: center;
              margin-bottom: 5px;
            }
            .content-adress i {
              color: #ffcd22;
            }
            .content-adress span {
              width: 90%;
              font-size: 13px;
              color: gray;
              font-weight: 500;
              white-space: nowrap;
              overflow: hidden;
              text-overflow: ellipsis;
            }
            .content-price {
              font-size: 15px;
              font-weight: 650;
              margin-bottom: 7px;
            }
            .content-utilities {
              width: 92%;
              padding-left: 10px;
              padding-bottom: 15px;
              margin-bottom: 25px;
              border-bottom: 1px solid #D8D8D8;
            }
            .content-utilities li{
              list-style: none;
              display: flex;
              align-items: center;
            }
            .content-utilities li i {
              width: 25px;
              font-size: 13px;
            }
            .content-utilities li span {
              font-size: 13px;
            }
            .content-bottom {
              padding-right: 40px;
              display: flex;
              align-items: center;
              justify-content: space-between;
            }
            .content-checkin {
              margin-right: 5px;
            }
            .content-feedback {
              display: flex;
              align-items: center;
              gap: 0 12px;
            }
            .content-review {
              display: flex;
              flex-direction: column;
              align-items: end;
            }
            .content-review span {
              display: block;
              font-size: 13px;
              font-weight: 650;
              line-height: 1.2;
            }
            .content-review i {
              font-size: 12px;
            }
            .content-rate {
              display: block;
              padding: 5px 9px;
              border-radius: 6px;
              background-color: #ffcd22;
              color: white;
              font-weight: 700;
            }
        </style>