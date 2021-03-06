<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AddCinema extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
       
    {
        $data = '
[
    {
        "id": "0a7ad4dd-1a39-46d7-9ec1-aaaf1d17cb55",
        "name": "Galaxy Cà Mau",
        "vistaName": "Galaxy Ca Mau",
        "slug": "galaxy-ca-mau",
        "description": "<!--| -->",
        "code": "1010",
        "order": 9,
        "phone": "1900 2224",
        "oldId": 19,
        "cityId": "477b975e-caac-4149-8fcc-a10fbde8df84",
        "address": "Lầu 2, TTTM Sense City, số 9, Trần Hưng Đạo, P.5, Tp. Cà Mau",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.7318442356013!2d105.15271071478776!3d9.178644193417188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a149a0d61b6b83%3A0x236a8af355f80d04!2sCo.opmart+C%C3%A0+Mau!5e0!3m2!1sen!2s!4v1495428317298",
        "imagePortrait": null,
        "imageLandscape": "/media/3/./3_250.jpg",
        "longitude": "105.154259",
        "latitude": "9.177642",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-camau-01_1557128016683.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-camau-02_1557128259980.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-camau-03_1557128024900.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-cm-082019-2d_1614754653953.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135215938.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2017-05-21T21:27:28.000Z",
        "updatedAt": "2021-03-03T06:58:17.000Z"
    },
    {
        "id": "0f95ca57-3707-4e69-bf01-c15993afd3ea",
        "name": "Galaxy Bến Tre",
        "vistaName": "Galaxy Ben Tre",
        "slug": "galaxy-ben-tre",
        "description": "<!--| -->",
        "code": "1006",
        "order": 6,
        "phone": "1900 2224",
        "oldId": 16,
        "cityId": "3504c4df-cc0f-4356-a934-260cf5e9ca32",
        "address": "Lầu 1, TTTM Sense City 26A Trần Quốc Tuấn, Phường 4, TP. Bến Tre",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.241034320439!2d106.37288981468237!3d10.24213409268541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310aa8f5efffffff%3A0x4d0b1ce07eaf344a!2zMjZhIFRy4bqnbiBRdeG7kWMgVHXhuqVu!5e0!3m2!1svi!2s!4v1451290756444",
        "imagePortrait": null,
        "imageLandscape": "/media/4/./4_12.jpg",
        "longitude": "106.376743",
        "latitude": "10.241451",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-ben-tre-1_1557133171810.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-ben-tre-2_1557133175911.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-ben-tre-3_1557133178563.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-bt-082019-2d_1614754713994.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135136524.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2015-12-28T20:08:49.000Z",
        "updatedAt": "2021-03-03T06:59:20.000Z"
    },
    {
        "id": "12f89a54-57df-4dc7-9633-56eb828b2956",
        "name": "Galaxy Huỳnh Tấn Phát",
        "vistaName": "Galaxy Huynh Tan Phat",
        "slug": "galaxy-huynh-tan-phat",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Tọa lạc tại lầu 2 si&ecirc;u thị Coopmart - 1362 Đường Huỳnh Tấn Ph&aacute;t, Khu phố 1, Phường Ph&uacute; Mỹ, Quận 7, TPHCM,<a href=\"https://www.galaxycine.vn/\"> <i>rạp chiếu phim</i></a> Galaxy Huỳnh Tấn Ph&aacute;t được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế với hệ thống ph&ograve;ng chiếu định dạng 2D &amp; 3D đ&aacute;p ứng tốt nhất nhu cầu xem phim của kh&aacute;n giả. M&agrave;n h&igrave;nh sắc n&eacute;t v&agrave; hệ thống &acirc;m thanh v&ograve;m Dolby 7.1 hiện đại mang đến những trải nghiệm sống động như thật.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Mục ti&ecirc;u của Galaxy Huỳnh Tấn Ph&aacute;t l&agrave; gi&uacute;p d&acirc;n cư ở khu vực quận 7, thị trấn Nh&agrave; B&egrave; v&agrave; khu vực l&acirc;n cận c&oacute; nhiều lựa chọn vui chơi giải tr&iacute; hơn. Với gi&aacute; v&eacute; hợp t&uacute;i tiền, <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim hay</a> <a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim mới </a></i>được cập nhật li&ecirc;n tục, kh&ocirc;ng gian trẻ trung v&agrave; nh&acirc;n vi&ecirc;n th&acirc;n thiện, chắc chắn đ&acirc;y sẽ l&agrave; một trải nghiệm mới lạ v&agrave; tuyệt vời.</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1013",
        "order": 11,
        "phone": "19002224 ",
        "oldId": 22,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "Lầu 2, TTTM Coopmart, số 1362 Huỳnh Tấn Phát, khu phố 1, Phường Phú Mỹ, Quận 7, Tp.Hồ Chí Minh, Việt Nam.",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.2854692022133!2d106.73473591521628!3d10.71245076329959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175254514ffbc13%3A0x94f76a7d3585b5ff!2zR2FsYXh5IENpbmVtYSBIdeG7s25oIFThuqVuIFBow6F0!5e0!3m2!1svi!2s!4v1512113731361",
        "imagePortrait": null,
        "imageLandscape": "/media/d/s/dsc03732.jpg",
        "longitude": "106.736914",
        "latitude": "10.712519",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-htp-01_1557132856992.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-htp-02_1557132627910.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-htp-03_1557132632697.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2019/9/4/banggiave-htp-082019-2d_1567584330638.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135797880.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "hoangts@galaxy.com.vn",
        "createdAt": "2017-09-24T20:06:47.000Z",
        "updatedAt": "2020-10-22T11:29:09.000Z"
    },
    {
        "id": "13ca0671-3301-4341-ab39-15893aec02f6",
        "name": "Galaxy Quang Trung",
        "vistaName": "Galaxy Quang Trung",
        "slug": "galaxy-quang-trung",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Đ&acirc;y l&agrave; cụm <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a> thứ 5 của Galaxy Cinema nằm tại con đường trung t&acirc;m nhộn nhịp nhất của quận G&ograve; Vấp, kết hợp c&ugrave;ng khu ăn uống v&agrave; mua sắm của Co.opmart FoodCosa, tạo n&ecirc;n một địa điểm giải tr&iacute; phức hợp tiện lợi v&agrave; đầy s&ocirc;i động.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Galaxy Quang Trung mang đến một kh&ocirc;ng gian điện ảnh mới với c&ocirc;ng nghệ chiếu phim đạt ti&ecirc;u chuẩn Hollywood. Hệ thống &acirc;m thanh Dolby 7.1 sống động kết hợp c&ugrave;ng hiệu ứng h&igrave;nh ảnh Digital sắc n&eacute;t sẽ mang đến những trải nghiệm điện ảnh trọn vẹn nhất. Ngo&agrave;i ra, với 7 ph&ograve;ng chiếu gồm hơn 1.000 chỗ ngồi sẽ lu&ocirc;n phục vụ kh&aacute;n giả với mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute; bởi đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp v&agrave; tận t&igrave;nh. Galaxy Quang Trung lu&ocirc;n cập nhật nhanh ch&oacute;ng những bom tấn <a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i>phim mới </i></a>nhất,<a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i> phim hay</i></a> nhất&nbsp;để phục vụ cho c&aacute;c mọt phim Việt Nam.</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "0000001005",
        "order": 5,
        "phone": "1900 2224",
        "oldId": 3,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "Lầu 3, TTTM CoopMart Foodcosa số 304A, Quang Trung, P.11, Q. Gò Vấp, Tp.HCM",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6873878127094!2d106.66212379999999!3d10.835218200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a79d4793eb%3A0x8d8c6caff9fccc4f!2sGalaxy+Cinema!5e0!3m2!1svi!2s!4v1442045531959",
        "imagePortrait": null,
        "imageLandscape": "/media/b/o/bo qtrung 2.jpg",
        "longitude": "106.662213",
        "latitude": "10.835079",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-quang-trung-1_1557133544324.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-quang-trung-2_1557133786398.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-quang-trung-3_1557133790242.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-quangtrung-082019-2d_1614754776223.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567136262859.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2015-08-20T09:57:36.000Z",
        "updatedAt": "2021-03-03T06:58:56.000Z"
    },
    {
        "id": "23a1c3a8-7d85-485a-9b7a-7deab3e57eba",
        "name": "Galaxy Tràng Thi",
        "vistaName": "Galaxy Trang Thi",
        "slug": "galaxy-trang-thi",
        "description": "<p><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Tọa lạc tại tầng 4,&nbsp; Trung t&acirc;m thương mại Nguyễn Kim số 10B Tr&agrave;ng Thi, Ho&agrave;n Kiếm, H&agrave; Nội,<b> Galaxy Tr&agrave;ng Thi</b>&nbsp;sở hữu vị tr&iacute; &ldquo;v&agrave;ng&rdquo; đối diện Thư viện Quốc gia, hết sức thuận tiện cho việc đi lại v&agrave; thưởng thức <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim hay</i></a>. Kh&aacute;c biệt với&nbsp;c&aacute;c rạp <a href=\"https://www.galaxycine.vn/\"><b>Galaxy Cinema</b></a> kh&aacute;c, b&ecirc;n cạnh&nbsp;việc&nbsp;đầu tư c&ocirc;ng nghệ hiện đại, thiết bị t&acirc;n tiến v&agrave; x&acirc;y dựng đ&uacute;ng theo ti&ecirc;u chuẩn rạp phim&nbsp;quốc tế, nội thất&nbsp;<strong>Galaxy Tr&agrave;ng Thi</strong> được thiết kế ho&agrave;n to&agrave;n mới mẻ v&agrave; trẻ trung nhằm phục vu nhu cầu &quot;selfie&quot; của giới trẻ hiện đại. Với 4 ph&ograve;ng chiếu, <b>Galaxy Tr&agrave;ng Thi</b>&nbsp;tr&igrave;nh chiếu đủ hai định dạng 2D &amp; 3D phục vụ tối đa nhu cầu của kh&aacute;ch h&agrave;ng. M&agrave;n h&igrave;nh sắc n&eacute;t v&agrave; hệ thống &acirc;m thanh v&ograve;m Dolby 7.1 hiện đại sẽ mang đến những trải nghiệm sống động như thật.</span></span></p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Từ nay, c&oacute; th&ecirc;m một địa chỉ để thưởng thức những bộ <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim mới</a></i> xuất sắc trong v&agrave; ngo&agrave;i nước rồi nh&eacute;. Nhanh ch&acirc;n đến ngay <b>Galaxy Tr&agrave;ng Thi</b>&nbsp;- tầng 4, 10B Tr&agrave;ng Thi, Ho&agrave;n Kiếm, H&agrave; Nội&nbsp;để cảm nhận trải nghiệm điện ảnh ho&agrave;n to&agrave;n mới k&egrave;m nhiều ưu đ&atilde;i hấp dẫn&nbsp;n&agrave;o&nbsp;c&aacute;c bạn!</span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1017",
        "order": 15,
        "phone": "19002224",
        "oldId": null,
        "cityId": "f4bf5f53-4e80-40c8-b1e0-f11ffa9a636a",
        "address": "Lầu 4, TTTM Nguyễn Kim, số 10B Tràng Thi, Hoàn Kiếm, Hà Nội.",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.07164212565!2d105.84786271639894!3d21.026952097782168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab94445b412f%3A0x33462b6e3b80a8f7!2zMTBiIFRyw6BuZyBUaGksIEjDoG5nIFRy4buRbmcsIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1554798174466!5m2!1sen!2s",
        "imagePortrait": "/media/2019/4/3/300x450_1554265967594.jpg",
        "imageLandscape": "/media/2019/4/3/450x300_1554265974196.jpg",
        "longitude": "105.848844",
        "latitude": "21.026945",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2021/3/3/dsc04261_1614762557343.jpg",
            "/media/2021/3/3/dsc04361_1614762560780.jpg",
            "/media/2021/3/3/dsc04383-edit_1614762564038.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-tt-web-2020-2d_1614754062536.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135640539.jpg"
            }
        ],
        "createdBy": "vietdq@galaxy.com.vn",
        "updatedBy": "oanhnph@galaxy.com.vn",
        "createdAt": "2019-04-03T04:02:15.000Z",
        "updatedAt": "2021-03-03T09:08:43.000Z"
    },
    {
        "id": "252a5eaf-7764-4e8a-a5f1-becbd2cf26c4",
        "name": "Galaxy Phạm Văn Chí",
        "vistaName": "Galaxy Pham Van Chi",
        "slug": "galaxy-pham-van-chi",
        "description": "<p><!--| --></p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Nằm trong Platinum Plaza &ndash; tụ điểm mua sắm, vui chơi v&agrave; giải tr&iacute; mới của người d&acirc;n Q6, <i><a href=\"https://www.galaxycine.vn/\">rạp chiếu phim</a> </i>Galaxy Phạm Văn Ch&iacute; c&oacute; 8 ph&ograve;ng chiếu được trang bị hệ thống theo chuẩn quốc tế, tr&igrave;nh chiếu cả định dạng 2D&amp;3D.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Với trang thiết bị hiện đại, m&agrave;n h&igrave;nh rộng sắc n&eacute;t v&agrave; hệ thống &acirc;m thanh v&ograve;m Dolby 7.1, Galaxy Phạm Văn Ch&iacute; sẽ mang đến cho kh&aacute;n giả những trải nghiệm sống động, đ&aacute;p ứng tối đa nhu cầu thưởng thức những bộ<i> <a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim hay phim mới</a></i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\"> </a>trong v&agrave; ngo&agrave;i nước. Với kh&ocirc;ng gian rạp trẻ trung, đội ngũ nh&acirc;n vi&ecirc;n th&acirc;n thiện, Galaxy Phạm Văn Ch&iacute; sẽ l&agrave; điểm đến mới của giới trẻ khu vực quận 6, quận 5, quận 8, quận B&igrave;nh T&acirc;n v&agrave; huyện B&igrave;nh Ch&aacute;nh. Ngo&agrave;i ra, mức gi&aacute; kinh tế đ&atilde; th&agrave;nh thương hiệu của <strong><a href=\"https://www.galaxycine.vn/\">Galaxy Cinema</a> </strong>cũng l&agrave; ưu điểm kh&ocirc;ng thể bỏ qua của Galaxy Phạm Văn Ch&iacute;.</span></span></span></span></p>\n",
        "code": "1012",
        "order": 10,
        "phone": "19002224",
        "oldId": 21,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "Lầu 5, TTTM Platinum Plaza, số 634Bis Phạm Văn Chí, Phường 8, Quận 6",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.916485520799!2d106.63617111521623!3d10.740919862784093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e7b1fd7891f%3A0xf3fca1ef9d1df98d!2zR2FsYXh5IENpbmVtYSBQaOG6oW0gVsSDbiBDaMOt!5e0!3m2!1svi!2s!4v1516330280708",
        "imagePortrait": null,
        "imageLandscape": "/media/s/l/slide_hinhrap_01.jpg",
        "longitude": "106.638328",
        "latitude": "10.740967",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-pvc-01_1557133103720.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-pvc-02_1557133353602.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-pvc-03_1557133119599.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-pvc-082019-2d_1614754642527.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567136158409.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2017-07-27T02:16:31.000Z",
        "updatedAt": "2021-03-03T06:56:44.000Z"
    },
    {
        "id": "3a9fe5b5-0f63-4889-aaae-6c1b76d7050d",
        "name": "Galaxy Đà Nẵng",
        "vistaName": "Galaxy Da Nang",
        "slug": "galaxy-da-nang",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Galaxy Đ&agrave; Nẵng tọa lạc tại lầu 3 Co.op Mart Đ&agrave; Nẵng - 478 Điện Bi&ecirc;n Phủ &ndash; <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a> được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế gồm 7 ph&ograve;ng chiếu 2D&amp;3D, &acirc;m thanh Dobly 7.1. Thiết kế trẻ trung, dịch vụ th&acirc;n thiện, cập nhật li&ecirc;n tục những bộ <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim mới</i> </a>nhất <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim hay </i></a>nhất trong nước cũng như quốc tế v&agrave; mức gi&aacute; v&ocirc; c&ugrave;ng &ldquo;hạt dẻ&rdquo;, <strong><a href=\"https://www.galaxycine.vn/\">Galaxy Cinema</a> </strong>sẽ thổi một luồng gi&oacute; mới v&agrave;o cộng đồng y&ecirc;u điện ảnh của th&agrave;nh phố s&ocirc;ng H&agrave;n.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Rạp phim đ&aacute;ng xem đ&atilde; đến với Đ&agrave; Nẵng &ndash; th&agrave;nh phố đ&aacute;ng sống rồi đ&acirc;y, h&atilde;y c&ugrave;ng đồng h&agrave;nh nh&eacute; c&aacute;c bạn!</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1008",
        "order": 8,
        "phone": "1900 2224",
        "oldId": 18,
        "cityId": "48def6c3-5254-4ece-b63c-e5524fda1296",
        "address": "Tầng 3, TTTM Coop Mart, 478 Điện Biên Phủ, Quận Thanh Khê, Đà Nẵng",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.977902597663!2d108.18440251524582!3d16.06663644377406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421901da0acdbf%3A0x6fea898ba4d1ac8d!2sGalaxy+Cinema!5e0!3m2!1svi!2s!4v1516330386730",
        "imagePortrait": null,
        "imageLandscape": "/media/1/./1_172.jpg",
        "longitude": "108.186528",
        "latitude": "16.066673",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2021/3/3/naml3206-2000x1xxx_1614762674721.jpg",
            "/media/2021/3/3/naml3213-2000x1xxx_1614762720108.jpg",
            "/media/2021/3/3/naml3226-2000x1xxx_1614762682363.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-dn-082019-2d_1614754712828.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135306053.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "oanhnph@galaxy.com.vn",
        "createdAt": "2016-09-08T20:54:50.000Z",
        "updatedAt": "2021-03-03T09:12:04.000Z"
    },
    {
        "id": "59eb32e2-a35e-4af5-89a2-90debbaf9767",
        "name": "Galaxy Buôn Ma Thuột",
        "vistaName": "Galaxy Buon Ma Thuot",
        "slug": "galaxy-buon-ma-thuot",
        "description": "<p style=\"margin-bottom:.0001pt; margin:0in 0in 10pt\"><span style=\"font-size:14px;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"line-height:normal\">Nằm ở vị tr&iacute; v&agrave;ng- tuyến đường Nguyễn Tất Th&agrave;nh sầm uất ngay tại trung t&acirc;m Tp. Bu&ocirc;n Ma Thuột, <strong>Galaxy Bu&ocirc;n Ma Thuột </strong>nằm trong Coop Mart Bu&ocirc;n Ma Thuột. Với hệ thống rạp chiếu phim hiện đại theo ti&ecirc;u chuẩn quốc tế c&ugrave;ng hai định dạng 2D &amp; 3D kết hợp hệ thống &acirc;m thanh v&ograve;m Dolby 7.1, <strong>Galaxy Bu&ocirc;n Ma Thuột </strong>sẽ mang đến cho kh&aacute;n giả th&agrave;nh phố c&agrave; ph&ecirc; những bộ <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim mới</a></i> <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim hay</a></i> trong ngo&agrave;i nước c&oacute; chất lượng tốt nhất. </span></span></span></p>\n\n<p style=\"margin-bottom:.0001pt; margin:0in 0in 10pt\"><span style=\"font-size:14px;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"line-height:normal\">Th&ecirc;m v&agrave;o đ&oacute;, những lợi thế thương hiệu <strong>Galaxy Cinema</strong> đ&atilde; ghi dấu ấn tr&ecirc;n to&agrave;n quốc như kh&ocirc;ng gian trẻ trung, dịch vụ th&acirc;n thiện v&agrave; mức gi&aacute; v&ocirc; c&ugrave;ng kinh tế đều l&agrave; điểm mạnh kh&oacute; thể bỏ qua của<strong> Galaxy Bu&ocirc;n Ma Thuột</strong>. Chắc chắn,<strong> Galaxy Bu&ocirc;n Ma Thuột</strong> gi&uacute;p kh&aacute;n giả m&ecirc; phim c&oacute; trải nghiệm tuyệt vời nhất.</span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1018",
        "order": 16,
        "phone": "19002224",
        "oldId": null,
        "cityId": "95ea07fe-5999-4030-bb5f-abe0440d96f0",
        "address": "Tầng trệt, TTTM Coop Mart Buôn Ma Thuột, số 71 Nguyễn Tất Thành, Phường Tân An, Tp. Buôn Ma Thuột, Tỉnh Đắk Lắk, Việt Nam",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.3278525170012!2d108.06004991413258!3d12.692011624387147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171f7d275a553c7%3A0x68491a4f83ce84dc!2zR2FsYXh5IEJ1w7RuIE1hIFRodeG7mXQ!5e0!3m2!1svi!2s!4v1562144854560!5m2!1svi!2s",
        "imagePortrait": "/media/2019/7/25/galaxy42_1564069263592.jpg",
        "imageLandscape": "/media/2019/7/25/galaxy45_1564069246883.jpg",
        "longitude": "108.062238",
        "latitude": "12.692027",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2019/12/11/galaxy7_1576054843437.jpg",
            "/media/2019/12/11/galaxy40_1576054846557.jpg",
            "/media/2019/12/11/galaxy46_1576054852883.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/19/banggiave-bmt-190321-2d-web_1616119555674.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/9/3/banggiave-bmt-3d-2019_1567494857071.jpg"
            }
        ],
        "createdBy": "vietdq@galaxy.com.vn",
        "updatedBy": "tracnp@galaxy.com.vn",
        "createdAt": "2019-07-03T08:37:31.000Z",
        "updatedAt": "2021-03-19T02:05:17.000Z"
    },
    {
        "id": "5a102aff-459d-4613-906d-5a8a4396a74f",
        "name": "Galaxy Long Xuyên",
        "vistaName": "Galaxy Long Xuyen",
        "slug": "galaxy-long-xuyen",
        "description": "<p><!--| -->Sở hữu vị tr&iacute; v&agrave;ng tr&ecirc;n con đường Trần Hưng Đạo thuộc trung t&acirc;m th&agrave;nh phố Long Xuy&ecirc;n. <strong>Galaxy Long Xuy&ecirc;n</strong> tọa lạc tại tầng 1, Trung T&acirc;m Mua Sắm Nguyễn Kim, số 1 Trần Hưng Đạo, P. Mỹ B&igrave;nh, Tp Long Xuy&ecirc;n.</p>\n\n<p><br />\nĐể đ&aacute;p ứng nhu cầu giải tr&iacute; v&agrave; mong muốn thưởng thức những bộ <a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim mới</a> <a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim hay</a> của thế giới, <strong>Galaxy Long Xuy&ecirc;n</strong> cung cấp 5 ph&ograve;ng chiếu được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế. Tất cả đều trang bị hệ thống &acirc;m thanh v&ograve;m Dolby 7.1.</p>\n\n<p><br />\nVới thương hiệu uy t&iacute;n của Galaxy Cinema được x&acirc;y dựng từ 16 năm qua, <strong>Galaxy Long Xuy&ecirc;n</strong> rất h&acirc;n hạnh đem đến chế độ dịch vụ chuy&ecirc;n nghiệp, kh&ocirc;ng gian được thiết kế mang phong c&aacute;ch hiện đại, đậm n&eacute;t đặc trưng kh&aacute;c biệt. Đồng thời vẫn đ&aacute;p ứng đủ ti&ecirc;u ch&iacute; ph&ugrave; hợp cho c&aacute;c bạn trẻ chụp ảnh &ndash; check in &ndash; sống ảo.&nbsp; &Aacute;p dụng mức gi&aacute; v&ocirc; c&ugrave;ng &ldquo;th&acirc;n thiện&rdquo; c&ugrave;ng nhiều chương tr&igrave;nh khuyến m&atilde;i hấp dẫn l&agrave; những ưu điểm nổi bật của <a href=\"https://www.galaxycine.vn/\">rạp chiếu phim</a> <strong>Galaxy Cinema</strong> m&agrave; bất kỳ ai cũng kh&ocirc;ng thể bỏ qua.</p>\n",
        "code": "1019",
        "order": 17,
        "phone": "19002224",
        "oldId": null,
        "cityId": "356d6f3d-5cb6-4392-9abf-84aae78c6573",
        "address": "Tầng 1, TTTM Nguyễn Kim, số 01 Trần Hưng Đạo, Phường Mỹ Bình, Thành phố Long Xuyên",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003994.8722197161!2d105.47268398028332!3d10.59051022370627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a73d67fc7325f%3A0x5a37b157784f689!2sGalaxy%20Cinema%20Long%20Xuy%C3%AAn!5e0!3m2!1svi!2s!4v1572497101924!5m2!1svi!2s",
        "imagePortrait": "/media/2019/12/27/79954387-139481084153695-3246954220183617536-o_1577418431929.jpg",
        "imageLandscape": "/media/2019/12/27/79592830-139480534153750-6373489647720333312-o_1577418493102.jpg",
        "longitude": "105.434246",
        "latitude": "10.470365",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2019/12/27/79725634-139480944153709-6978530521160613888-o_1577418511226.jpg",
            "/media/2019/12/27/79838883-139480674153736-6337298685621174272-o_1577418516231.jpg",
            "/media/2019/12/27/79844929-139480880820382-5735358774273638400-o_1577418596248.jpg",
            "/media/2019/12/27/80077318-139480644153739-5771371117272891392-o_1577418600896.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/web-banggiave-longxuyen-122019-2d_1614754231119.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/12/18/lcd-banggiave-longxuyen-3d-122019-1576054165791_1576658282022.jpg"
            }
        ],
        "createdBy": "vietdq@galaxy.com.vn",
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2019-10-31T04:49:34.000Z",
        "updatedAt": "2021-03-03T06:49:51.000Z"
    },
    {
        "id": "5e0c771c-55b2-431c-a368-b8bd1d815e3d",
        "name": "Galaxy Mipec Long Biên",
        "vistaName": "Galaxy Mipec Long Bien",
        "slug": "galaxy-mipec-long-bien",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Đến với<strong> <a href=\"https://www.galaxycine.vn/\">Galaxy Cinema</a></strong><a href=\"https://www.galaxycine.vn/\"> </a>Mipec Long Bi&ecirc;n, kh&aacute;n giả sẽ được thưởng thức c&aacute;c si&ecirc;u phẩm của điện ảnh Việt Nam v&agrave; thế giới tại một hệ thống <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i> </a>hiện đại đạt chuẩn Hollywood gồm 07 ph&ograve;ng chiếu c&ocirc;ng nghệ 2D &amp;3D c&ugrave;ng hệ thống &acirc;m thanh Dolby 7.1 ti&ecirc;u chuẩn quốc tế theo đ&uacute;ng ti&ecirc;u ch&iacute; &ldquo;Mang Hollywood đến gần bạn&rdquo;.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">C&oacute; thiết kế trẻ trung, dịch vụ th&acirc;n thiện, Galaxy Cinema mong muốn sẽ l&agrave; địa điểm tụ họp của những người đam m&ecirc; m&agrave;n ảnh rộng, muốn thỏa sức v&ugrave;ng vẫy trong kh&ocirc;ng gian điện ảnh v&ocirc; c&ugrave;ng sống động v&agrave; tận hưởng những bộ <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim mới</i> <i>phim hay</i></a> c&ugrave;ng l&uacute;c với c&aacute;c mọt phim thế giới.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Ngo&agrave;i ra, với ch&iacute;nh s&aacute;ch gi&aacute; cả v&ocirc; c&ugrave;ng hợp l&yacute;, những trải nghi&ecirc;̣m đi&ecirc;̣n ảnh ch&acirc;́t lượng cao tại <a href=\"https://www.galaxycine.vn/\"><strong>Galaxy Cinema</strong></a> kh&ocirc;ng h&ecirc;̀ đắt đỏ với c&ocirc;ng ch&uacute;ng. <a href=\"https://www.galaxycine.vn/\">Galaxy Cinema</a> tự tin l&agrave; người bạn đ&ocirc;̀ng hành cho nhu cầu giải tr&iacute; tổng hợp của đ&ocirc;ng đảo kh&aacute;n giả thủ đ&ocirc;.</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1007",
        "order": 7,
        "phone": "1900 2224",
        "oldId": 17,
        "cityId": "f4bf5f53-4e80-40c8-b1e0-f11ffa9a636a",
        "address": "Tầng 6, TTTM Mipec Long Biên, Số 2, Phố Long Biên 2, Ngọc Lâm, Long Biên, Hà Nội",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6803747257313!2d105.86358721529058!3d21.045471292582636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd18fdd6e55%3A0x1d08f35be6647c7e!2zUuG6oXAgY2hp4bq_dSBwaGltIEdhbGF4eSBMb25nIEJpw6pu!5e0!3m2!1svi!2s!4v1516330472346",
        "imagePortrait": null,
        "imageLandscape": "/media/2/./2_86.jpg",
        "longitude": "105.865776",
        "latitude": "21.045536",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-mipec-long-bien-1_1557132957462.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-mipec-long-bien-2_1557132960508.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-mipec-long-bien-3_1557132963528.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/19/banggiave-mipec-19032021-2d-web_1616119608041.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135517412.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "tracnp@galaxy.com.vn",
        "createdAt": "2016-07-08T02:10:28.000Z",
        "updatedAt": "2021-03-19T02:06:08.000Z"
    },
    {
        "id": "80f80767-6c5a-44b0-8ca5-fe62c40aa4c4",
        "name": "Galaxy Tân Bình",
        "vistaName": "Galaxy Tan Binh",
        "slug": "galaxy-tan-binh",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Galaxy T&acirc;n B&igrave;nh, hay c&ograve;n được c&aacute;c Stars quen gọi l&agrave; &ldquo;Galaxy Nguyễn Hồng Đ&agrave;o&rdquo; do tọa lạc tại số 246 Nguyễn Hồng Đ&agrave;o, Q.TB, Tp.HCM. </span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Với diện t&iacute;ch hơn 3000 m2 gồm 5 ph&ograve;ng chiếu , Galaxy T&acirc;n B&igrave;nh được đ&aacute;nh gi&aacute; như một thế giới Hollywood thu nhỏ của TP.HCM. C&ugrave;ng sự hỗ trợ tư vấn thiết kế v&agrave; lắp đặt bởi c&aacute;c chuy&ecirc;n gia của Tập đo&agrave;n Warner Bros đến từ Hollywood, c&aacute;c ph&ograve;ng chiếu 2D v&agrave; 3D với m&agrave;n h&igrave;nh chiếu sắc n&eacute;t v&agrave; d&agrave;n &acirc;m thanh Dolby 7.1 bậc nhất tại Việt Nam. Đ&acirc;y l&agrave; cụm <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a>&nbsp;đầu ti&ecirc;n của Galaxy được trang bị hệ thống &acirc;m thanh Dolby 7.1 v&agrave; hệ thống chiếu phim Digital khiến chất lượng h&igrave;nh ảnh v&agrave; &acirc;m thanh của những bộ<a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i>&nbsp;phim hay </i></a>c&agrave;ng&nbsp;sống động, tuyệt vời&nbsp;bậc nhất. Galaxy T&acirc;n B&igrave;nh&nbsp;l&agrave; một trong những cụm rạp đ&ocirc;ng kh&aacute;ch nhất của Galaxy Cinema v&agrave; lu&ocirc;n cập nhật nhanh ch&oacute;ng nhất những bộ <a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i>phim mới</i> </a>để phục vụ cho nhu cầu của kh&aacute;n giả.&nbsp;</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1003",
        "order": 3,
        "phone": "1900 2224",
        "oldId": 1,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "246 Nguyễn Hồng Đào, Q.TB, Tp.HCM",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2722042714763!2d106.64075729999999!3d10.7904517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ead62de80b7%3A0x5cde8036b5d68e56!2zR2FsYXh5IFTDom4gQsOsbmg!5e0!3m2!1svi!2s!4v1442046380852",
        "imagePortrait": null,
        "imageLandscape": "/media/t/b/tb 1.jpg",
        "longitude": "106.640669",
        "latitude": "10.790628",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-tan-binh-1_1557134148145.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-tan-binh-2_1557134155796.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-tan-binh-3_1557133920863.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/19/banggiave-tanbinh-190321-2d-web_1616119660671.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567136351410.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "tracnp@galaxy.com.vn",
        "createdAt": "2015-08-20T09:57:36.000Z",
        "updatedAt": "2021-03-19T02:07:01.000Z"
    },
    {
        "id": "b4937159-1a8e-43c1-b6eb-e92e13352e2e",
        "name": "Galaxy Trung Chánh",
        "vistaName": "Galaxy Trung Chanh",
        "slug": "galaxy-trung-chanh",
        "description": "<p><!--| --></p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Tọa lạc ở Trung t&acirc;m văn h&oacute;a Quận 12 &ndash; Số 09, Quốc Lộ 22, Phường Trung Mỹ T&acirc;y , Quận 12, TPHCM. Cũng như c&aacute;c rạp Galaxy Cinema kh&aacute;c, Galaxy Trung Ch&aacute;nh c&oacute; hệ thống <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a>&nbsp;được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế. C&aacute;c ph&ograve;ng chiếu với hai định dạng 2D &amp; 3D đ&aacute;p ứng tối đa nhu cầu kh&aacute;n giả. M&agrave;n h&igrave;nh sắc n&eacute;t v&agrave; hệ thống &acirc;m thanh v&ograve;m Dolby 7.1 hiện đại sẽ mang đến những trải nghiệm sống động như thật. Ngo&agrave;i ra, c&aacute;c &ldquo;đặc sản&rdquo; đ&atilde; từng gi&uacute;p thương hiệu Galaxy Cinema &ldquo;nổi đ&igrave;nh nổi đ&aacute;m&rdquo; như kh&ocirc;ng gian trẻ trung, dịch vụ th&acirc;n thiện, gi&aacute; cả cực kỳ &ldquo;kinh tế&rdquo; cũng l&agrave; ưu điểm kh&ocirc;ng thể bỏ qua.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Với sự xuất hiện của Galaxy Trung Ch&aacute;nh, c&aacute;c fan điện ảnh khu vực H&oacute;c M&ocirc;n v&agrave; Quận 12 sẽ c&oacute; th&ecirc;m một lựa chọn vui chơi giải tr&iacute; kh&ocirc;ng-thể-chối-từ. Từ nay, c&aacute;c bạn kh&ocirc;ng phải đi xa hoặc tiếc nuối v&igrave; đ&atilde; lỡ bỏ một bộ <a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i>phim hay</i>/</a> <a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i>phim mới&nbsp;</i></a>nh&eacute;.</span></span></span></span></p>\n",
        "code": "1011",
        "order": 10,
        "phone": "1900 2224",
        "oldId": 20,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "TTVH Quận 12, Số 09 Quốc Lộ 22, P. Trung Mỹ Tây, Quận 12",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4117887685616!2d106.60516406893572!3d10.856251508533159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a60ed9037914ff5!2zVHJ1bmcgdMOibSB2xINuIGhvw6EgUXXhuq1uIDEy!5e0!3m2!1svi!2s!4v1497264338279",
        "imagePortrait": null,
        "imageLandscape": "/media/5/./5_206.jpg",
        "longitude": "106.607965",
        "latitude": "10.855400",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-tc-01_1557133665388.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-tc-02_1557133669536.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-tc-03_1557133911768.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-trungchanh-082019-2d_1614754630720.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567136423819.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2017-06-12T03:34:23.000Z",
        "updatedAt": "2021-03-03T06:57:53.000Z"
    },
    {
        "id": "bd298261-58ea-4e87-bb27-337be87ba00c",
        "name": "Galaxy Nguyễn Văn Quá",
        "vistaName": "Galaxy Nguyen Van Qua",
        "slug": "galaxy-nguyen-van-qua",
        "description": "<p><!--| --></p>\n\n<p style=\"text-align:justify; margin:0in 0in 8pt; margin-right:0in; margin-left:0in\"><span style=\"font-size:12pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Tọa lạc ở 119B Nguyễn Văn Qu&aacute;, <b>Galaxy Nguyễn Văn Qu&aacute;</b> sở hữu vị tr&iacute; &ldquo;v&agrave;ng&rdquo; gần cầu Chợ Cầu, hết sức thuận tiện cho việc đi lại v&agrave; thưởng thức <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim hay</i></a>. Cũng như c&aacute;c rạp <a href=\"https://www.galaxycine.vn/\"><b>Galaxy Cinema</b></a> kh&aacute;c, <b>Galaxy Nguyễn Văn Qu&aacute;</b> được đầu tư c&ocirc;ng nghệ hiện đại, thiết bị t&acirc;n tiến v&agrave; x&acirc;y dựng đ&uacute;ng theo ti&ecirc;u chuẩn quốc tế. Với 7 ph&ograve;ng chiếu, <b>Galaxy Nguyễn Văn Qu&aacute;</b> tr&igrave;nh chiếu đủ hai định dạng 2D &amp; 3D phục vụ tối đa nhu cầu của kh&aacute;ch h&agrave;ng. M&agrave;n h&igrave;nh sắc n&eacute;t v&agrave; hệ thống &acirc;m thanh v&ograve;m Dolby 7.1 hiện đại sẽ mang đến những trải nghiệm sống động như thật. </span></span></span></p>\n\n<p style=\"text-align:justify; margin:0in 0in 8pt; margin-right:0in; margin-left:0in\"><span style=\"font-size:12pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Từ nay, c&oacute; th&ecirc;m một địa chỉ để thưởng thức những bộ <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim mới</a></i> xuất sắc trong v&agrave; ngo&agrave;i nước rồi nh&eacute;. Nhanh ch&acirc;n đến ngay <b>Galaxy Nguyễn Văn Qu&aacute;</b> - 119B Nguyễn Văn Qu&aacute; để nhận ưu đ&atilde;i n&agrave;o c&aacute;c bạn!</span></span></span></p>\n",
        "code": "1016",
        "order": 14,
        "phone": "19002224",
        "oldId": null,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "119B Nguyễn Văn Quá, Phường Đông Hưng Thuận, Quận 12",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.616281435551!2d106.6277653143511!3d10.840648792277957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529809630bdb9%3A0x21c165d4ca1c1e42!2zR2FsYXh5IE5ndXnhu4VuIFbEg24gUXXDoSBRMTI!5e0!3m2!1sen!2s!4v1524544085154",
        "imagePortrait": null,
        "imageLandscape": "/media/2018/4/24/nguyenvanqua_1524544693426.jpg",
        "longitude": "106.630018",
        "latitude": "10.841549",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-nvq-03_1557131223741.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-nvq-02_1557131228718.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-nvq-01_1557130993556.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-nvq-082019-2d_1614754492186.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567136052222.jpg"
            }
        ],
        "createdBy": "oanhnph@galaxy.com.vn",
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2018-04-23T21:08:54.000Z",
        "updatedAt": "2021-03-03T06:54:57.000Z"
    },
    {
        "id": "d1b07444-41e4-46b4-99c6-444e97518624",
        "name": "Galaxy Linh Trung",
        "vistaName": "Galaxy Linh Trung",
        "slug": "galaxy-linh-trung",
        "description": "<p style=\"margin:0in 0in 10pt\"><span style=\"font-size:14px;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"line-height:115%\"><span style=\"line-height:115%\"><span style=\"color:black\">Nhằm tiếp tục mang đến cho kh&aacute;ch h&agrave;ng th&ecirc;m một địa điểm đ&aacute;p ứng nhu cầu giải tr&iacute; v&agrave; mong muốn thưởng thức những <a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim mới</a> nhất, <a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim hay</a> nhất của Việt Nam v&agrave; thế giới, <b>Galaxy Cinema Linh Trung</b> ch&iacute;nh thức ra mắt tại Thủ Đức v&agrave;o ng&agrave;y 10.01.2020.</span></span></span></span></span></p>\n\n<p style=\"margin:0in 0in 10pt\"><span style=\"font-size:14px;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"line-height:115%\"><span style=\"line-height:115%\"><span style=\"color:black\">Được xem như l&agrave; tr&aacute;i tim của khu vực Đ&ocirc;ng Bắc quận Thủ Đức, <strong>Galaxy Linh Trung</strong> sở hữu vị tr&iacute; v&agrave;ng khi tọa lạc tại Co.opXtra Linh Trung, số 934 Quốc Lộ 1A, P.Linh Trung, Thủ Đức, Tp.HCM.</span></span></span></span></span></p>\n\n<p style=\"margin:0in 0in 10pt\"><span style=\"font-size:14px;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"line-height:115%\"><b><span style=\"line-height:115%\"><span style=\"color:black\">Galaxy Linh Trung</span></span></b><span style=\"line-height:115%\"><span style=\"color:black\"> trang bị 5 ph&ograve;ng chiếu với gần 700 ghế được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế, mỗi rạp đều được t&iacute;ch hợp hệ thống &acirc;m thanh v&ograve;m Dolby 7.1. Hứa hẹn sẽ đem đến cho c&aacute;c t&iacute;n đồ điện ảnh trải nghiệm h&igrave;nh ảnh sống động v&agrave; &acirc;m thanh ch&acirc;n thực tuyệt đối.</span></span></span></span></span></p>\n",
        "code": "1020",
        "order": 100,
        "phone": "19002224",
        "oldId": null,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "Tầng trệt, TTTM Co.opXtra Linh Trung, số 934 Quốc Lộ 1A, Phường Linh Trung, Quận Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44332.225255531775!2d106.73267003413986!3d10.853174638748207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175275865bed18b%3A0x128be83e2a9c3437!2sGALAXY%20LINH%20TRUNG!5e0!3m2!1svi!2s!4v1572506825526!5m2!1svi!2s",
        "imagePortrait": "/media/2019/12/27/sanh-rap-1---glx-linh-trung_1577419440598.jpg",
        "imageLandscape": "/media/2019/12/27/hanh-lang-soat-ve---glx-linh-trung_1577419450118.jpg",
        "longitude": "106.776963",
        "latitude": "10.874162",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2020/1/14/dsc08728_1578986478126.jpg",
            "/media/2020/1/14/dsc08806_1578986791021.jpg",
            "/media/2020/1/14/dsc08626_1578986801643.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2020/2/20/web-banggiave-linhtrung-2020-2d_1582169547877.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2020/2/20/banggiave-linhtrung-2020-3d_1582169616650.jpg"
            }
        ],
        "createdBy": "hanhdt@galaxy.com.vn",
        "updatedBy": "vietdq@galaxy.com.vn",
        "createdAt": "2019-10-31T07:31:01.000Z",
        "updatedAt": "2020-10-22T11:29:09.000Z"
    },
    {
        "id": "e4c4d2ec-d494-4054-86df-1011bf53f9b6",
        "name": "Galaxy Hải Phòng",
        "vistaName": "Galaxy Hai Phong",
        "slug": "galaxy-hai-phong",
        "description": "<p><!--| --></p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Nằm ở khu vực trung t&acirc;m th&agrave;nh phố hoa phượng đỏ, Galaxy Hải Ph&ograve;ng tọa lạc ở khu đất v&agrave;ng 104 Lương Kh&aacute;nh Thiện, tầng 7, Trung T&acirc;m Thương Mại Nguyễn Kim &ndash; S&agrave;i G&ograve;n Mall. Cụm rạp mới nhất c&oacute; 06 ph&ograve;ng chiếu &ndash; hơn 700 chỗ ngồi v&agrave; c&oacute; cả ghế đ&ocirc;i. Tất cả được trang bị tối t&acirc;n, đ&uacute;ng chuẩn Hollywood, c&oacute; khả năng tr&igrave;nh chiếu cả định dạng 2D v&agrave; 3D c&ugrave;ng hệ thống &acirc;m thanh v&ograve;m Dolby 7.1.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">L&agrave; thương hiệu d&agrave;nh cho giới trẻ, <a href=\"https://www.galaxycine.vn/\"><strong>Galaxy Cinema</strong></a> ghi điểm ở mức gi&aacute; &ldquo;kinh tế&rdquo; cũng như dịch vụ th&acirc;n thiện h&agrave;ng đầu Việt Nam. Ngo&agrave;i ra, kh&ocirc;ng gian <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a> ấn tượng v&agrave; đậm chất điện ảnh c&ograve;n gi&uacute;p Galaxy Hải Ph&ograve;ng trở th&agrave;nh điểm đến kh&oacute; thể bỏ qua v&agrave;o dịp cuối tuần.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Chắc chắn rằng, sự xuất hiện của Galaxy Hải Ph&ograve;ng sẽ gi&uacute;p cho giới trẻ của th&agrave;nh phố c&oacute; th&ecirc;m lựa chọn khi muốn thưởng thức những <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim hay</i> </a>nhất <a href=\"https://www.galaxycine.vn/phim-dang-chieu\"><i>phim mới </i></a>nhất trong - ngo&agrave;i nước c&ugrave;ng bạn b&egrave; v&agrave; người y&ecirc;u. Với Galaxy Hải Ph&ograve;ng, mỗi lần xem phim đều l&agrave; trải nghiệm hết sức tuyệt vời.</span></span></span></span></p>\n",
        "code": "1015",
        "order": 13,
        "phone": "19002224",
        "oldId": null,
        "cityId": "29ca9635-7ff0-44bf-8793-c97acba3f57a",
        "address": "Lầu 7, TTTM Nguyễn Kim - Sài Gòn Mall, số 104 Lương Khánh Thiện.",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14913.569881970314!2d106.686444!3d20.8562254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96c0a8754c0b2c54!2zR2FsYXh5IENpbmVtYSBI4bqjaSBQaMOybmc!5e0!3m2!1svi!2s!4v1517371136776",
        "imagePortrait": null,
        "imageLandscape": "/media/2018/1/31/hinh01_1517377375437.jpg",
        "longitude": "106.686272",
        "latitude": "20.857549",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-hp-01_1557131637213.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-hp-02_1557131640911.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-hp-03_1557131882854.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-hp-082019-2d_1614754566145.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135423195.jpg"
            }
        ],
        "createdBy": "duyhn2@galaxy.com.vn",
        "updatedBy": "hanhdt@galaxy.com.vn",
        "createdAt": "2017-12-21T20:52:11.000Z",
        "updatedAt": "2021-03-03T06:55:26.000Z"
    },
    {
        "id": "f3ba1590-5904-4ce9-8178-e3c6a9608df4",
        "name": "Galaxy Vinh",
        "vistaName": "Galaxy Vinh",
        "slug": "galaxy-vinh",
        "description": "<p><!--| --></p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Tọa lạc tại vị tr&iacute; đắc địa l&agrave; lầu 5 Trung t&acirc;m thương mại giải tr&iacute;&nbsp;HUB &ndash; số 1 L&ecirc; Hồng Phong, th&agrave;nh phố Vinh, cụm <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a> thứ 12 của <strong><a href=\"https://www.galaxycine.vn/\">Galaxy Cinema</a> </strong>c&oacute; đến 5 ph&ograve;ng chiếu hiện đại với hai định dạng 2D v&agrave; 3D, được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế c&ugrave;ng hệ thống &acirc;m thanh v&ograve;m Dolby 7.1.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Ngo&agrave;i ra, l&agrave; một thương hiệu đến từ TPHCM, <a href=\"https://www.galaxycine.vn/\"><strong>Galaxy Cinema</strong> </a>c&ograve;n &ldquo;ghi điểm&rdquo; ở kh&ocirc;ng gian trẻ trung, dịch vụ th&acirc;n thiện. Đặc biệt, mức gi&aacute; v&ocirc; c&ugrave;ng &ldquo;kinh tế&rdquo; cũng l&agrave; một ưu điểm bạn kh&ocirc;ng thể bỏ qua. </span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Sự xuất hiện của Galaxy Vinh sẽ gi&uacute;p người d&acirc;n qu&ecirc; B&aacute;c c&oacute; th&ecirc;m nhiều lựa chọn vui chơi giải tr&iacute;, xem <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu\">phim hay phim mới</a> </i>c&ugrave;ng fan điện ảnh to&agrave;n thế giới. Chắc chắn rằng, việc thưởng thức c&aacute;c bom tấn điện ảnh trong nước v&agrave; quốc tế c&ugrave;ng bạn b&egrave; hay người y&ecirc;u sẽ l&agrave; một trải nghiệm hết sức tuyệt vời.</span></span></span></span></p>\n",
        "code": "1014",
        "order": 12,
        "phone": "1900 2224",
        "oldId": null,
        "cityId": "6c1d6ebc-dfc9-47ca-b0e9-2be7766f68d4",
        "address": "Lầu 5, Trung tâm Giải Trí City HUB – số 1 Lê Hồng Phong, thành phố Vinh",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.720496900457!2d105.67488981526716!3d18.676534369259237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce702d0a8375%3A0x4480757826e8906c!2sGalaxy+Cinema+Vinh!5e0!3m2!1svi!2s!4v1512112221043",
        "imagePortrait": null,
        "imageLandscape": "/media/2017/12/1/vinh-1_1512096689718.JPG",
        "longitude": "105.677077",
        "latitude": "18.676532",
        "reward": 0,
        "status": 1,
        "imageUrls": [
            "/media/2021/3/3/dsc00687-2_1614762420979.jpg",
            "/media/2021/3/3/hinh-adapt_1614762383198.jpg",
            "/media/2021/3/3/hinh-adapt-05-_1614762427773.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/3/banggiave-vinh-082019-2d_1614754549262.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135723058.jpg"
            }
        ],
        "createdBy": "minhtq@galaxy.com.vn",
        "updatedBy": "oanhnph@galaxy.com.vn",
        "createdAt": "2017-11-30T19:52:29.000Z",
        "updatedAt": "2021-03-03T09:06:30.000Z"
    },
    {
        "id": "fb233b0f-edb4-4eb1-ade8-7f8b83ab2457",
        "name": "Galaxy Nguyễn Du",
        "vistaName": "Galaxy Nguyen Du",
        "slug": "galaxy-nguyen-du",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">L&agrave; rạp chiếu đầu ti&ecirc;n v&agrave; đ&ocirc;ng kh&aacute;ch nhất trong hệ thống, Galaxy Nguyễn Du ch&iacute;nh thức đi v&agrave;o hoạt động từ ng&agrave;y 20/5/2005 v&agrave; được xem l&agrave; một trong những cụm rạp mang ti&ecirc;u chuẩn quốc tế hiện đại bậc nhất đầu ti&ecirc;n xuất hiện tại Việt Nam. Galaxy Nguyễn Du l&agrave; một trong những <a href=\"https://www.galaxycine.vn/\"><i>rạp chiếu phim</i></a>&nbsp;ti&ecirc;n phong mang đến cho kh&aacute;n giả những trải nghiệm<a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"> <i>phim chiếu rạp</i></a> tốt nhất.&nbsp;</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Galaxy Nguyễn Du gồm 5 ph&ograve;ng chiếu với hơn 1000 chỗ ngồi, trong đ&oacute; c&oacute; 1 ph&ograve;ng chiếu phim 3D v&agrave; 4 ph&ograve;ng chiếu phim 2D, với hơn 1000 chỗ ngồi được thiết kế tinh tế gi&uacute;p kh&aacute;ch h&agrave;ng c&oacute; thể xem những bộ<a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"> <i>phim hay</i>&nbsp;</a>một c&aacute;ch thoải m&aacute;i v&agrave; thuận tiện nhất. Chất lượng h&igrave;nh ảnh r&otilde; n&eacute;t, &acirc;m thanh Dolby 7.1 c&ugrave;ng m&agrave;n h&igrave;nh chiếu kỹ thuật 3D v&agrave; Digital v&ocirc; c&ugrave;ng sắc mịn, mang đến một kh&ocirc;ng gian giải tr&iacute; v&ocirc; c&ugrave;ng sống động.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">B&ecirc;n cạnh đ&oacute;, với lợi thế gần khu vực sầm uất bậc nhất ở trung t&acirc;m th&agrave;nh phố, b&atilde;i để xe rộng r&atilde;i, c&oacute; tiệm cafe ngo&agrave;i trời &ndash; đ&acirc;y l&agrave; nơi cực thu h&uacute;t bạn trẻ đến xem phim v&agrave; check-in.</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1001",
        "order": 1,
        "phone": "1900 2224",
        "oldId": 5,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "116 Nguyễn Du, Quận 1, Tp.HCM",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.500360144465!2d106.69119831435039!3d10.772936992323917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0189fa2b%3A0x6e75dc36d4dba07d!2sGalaxy+Nguy%E1%BB%85n+Du!5e0!3m2!1svi!2s!4v1517371343633",
        "imagePortrait": null,
        "imageLandscape": "/media/2/ /2 nd 2511.jpg",
        "longitude": "106.693290",
        "latitude": "10.773390",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-nguyen-du-1_1557134449561.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-nguyen-du-2_1557134452480.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-nguyen-du-3_1557134455385.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/19/banggiave-nguyendu-190321-2d-web_1616119589834.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567136002205.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "tracnp@galaxy.com.vn",
        "createdAt": "2015-08-20T09:57:36.000Z",
        "updatedAt": "2021-03-19T02:07:18.000Z"
    },
    {
        "id": "fe18db21-cdee-44ba-90c3-f2e3ac6c8320",
        "name": "Galaxy Kinh Dương Vương",
        "vistaName": "Galaxy Kinh Duong Vuong",
        "slug": "galaxy-kinh-duong-vuong",
        "description": "<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Galaxy Kinh Dương Vương l&agrave; cụm<i> <a href=\"https://www.galaxycine.vn/\">rạp chiếu phim</a></i><a href=\"https://www.galaxycine.vn/\"> </a>đầu ti&ecirc;n v&agrave; duy nhất tại khu vực quận 6 t&iacute;nh cho đến năm 2016.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Ngay từ l&uacute;c khai trương v&agrave;o năm 2013, nơi đ&acirc;y đ&atilde; c&oacute; 7 ph&ograve;ng chiếu được thiết kế theo ti&ecirc;u chuẩn quốc tế với khoảng c&aacute;ch ghế ngồi rộng r&atilde;i. B&ecirc;n cạnh đ&oacute;, hệ thống &acirc;m thanh Dolby 7.1, m&agrave;n h&igrave;nh chiếu kỹ thuật 3D v&agrave; Digital v&ocirc; c&ugrave;ng mịn, sắc n&eacute;t đến từng ph&uacute;t gi&acirc;y mang đến những trải nghiệm <i><a href=\"https://www.galaxycine.vn/phim-dang-chieu/\">phim hay</a> </i>cực đỉnh.</span></span></span></span></p>\n\n<p style=\"margin:0in 0in 8pt\">&nbsp;</p>\n\n<p style=\"margin:0in 0in 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Sự ra đời của Galaxy Kinh Dương Vương thỏa khao kh&aacute;t từ l&acirc;u của c&aacute;c t&iacute;n đồ điện ảnh. Chỉ mới đ&acirc;y th&ocirc;i, cư d&acirc;n Q.6 v&agrave; c&aacute;c v&ugrave;ng l&acirc;n cận muốn thưởng thức một bộ<a href=\"https://www.galaxycine.vn/phim-dang-chieu/\"><i> phim mới&nbsp;t</i></a>ại rạp bắt buộc phải lặn lội v&agrave;o trung t&acirc;m. Đặc biệt, chỉ qua 3 ng&agrave;y đầu ti&ecirc;n khai trương, rạp đ&atilde; đạt mức v&eacute; b&aacute;n kỷ lục l&agrave; hơn 16.000 v&eacute;.</span></span></span></span></p>\n\n<p><!--| --></p>\n",
        "code": "1004",
        "order": 4,
        "phone": "1900 2224",
        "oldId": 4,
        "cityId": "599535ea-1ea2-4393-9b5a-3ba3a807f363",
        "address": "718bis Kinh Dương Vương, Q6, TpHCM.",
        "mapEmbeb": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.796925318474!2d106.6283014!3d10.7501286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c2ab06fc7b7%3A0x50a4eefae0a2deca!2zR2FsYXh5IEtpbmggRMawxqFuZyBWxrDGoW5n!5e0!3m2!1svi!2s!4v1442045427664",
        "imagePortrait": null,
        "imageLandscape": "/media/k/d/kdv 1.jpg",
        "longitude": "106.628085",
        "latitude": "10.750501",
        "reward": 1,
        "status": 1,
        "imageUrls": [
            "/media/2019/5/6/rapgiave-hinhrap-kinh-duong-vuong-1_1557134753588.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-kinh-duong-vuong-2_1557134756334.jpg",
            "/media/2019/5/6/rapgiave-hinhrap-kinh-duong-vuong-3_1557134758823.jpg"
        ],
        "ticket": [
            {
                "name": "2D",
                "url": "/media/2021/3/19/banggiave-kdv-082019-2d-web_1616119582993.jpg"
            },
            {
                "name": "3D",
                "url": "/media/2019/8/30/banggiave-082019-3d_1567135891901.jpg"
            }
        ],
        "createdBy": null,
        "updatedBy": "tracnp@galaxy.com.vn",
        "createdAt": "2015-08-20T09:57:36.000Z",
        "updatedAt": "2021-03-19T02:06:27.000Z"
    }
]';
        $data = json_decode($data,true);
        for ($i=0; $i < count($data); $i++) { 
            DB::table('cinema')->insert([
                "name" => $data[$i]['name'],
                "address" => $data[$i]['address'],
            ]);
        }
        // DB::table('cinema')->delete();
    }
    
}
