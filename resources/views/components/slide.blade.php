<div x-data="slideshow" x-init="autoplay" class="w-full h-screen flex flex-col lg:flex-row relative">
    <template x-for="(slide, index) in slides">
        <img x-cloak x-show="currentSlideIndex == index + 1" x-bind:src="slide.src"
            class="absolute left-0 top-0 object-cover size-full animate-slide-x" x-transition.opacity.duration.2000ms />
    </template>
    <div
        class="order-3 lg:order-1 h-full w-full lg:w-1/2 flex flex-col justify-between bg-charm-dark-500/20 lg:bg-charm-dark-500/30 lg:backdrop-blur-xs overflow-hidden relative halftone">
        <div class="hidden lg:block ms-auto my-10 bg-charm-dark-400 p-2 relative z-10 duration-1500"
            x-intersect="$el.classList.add('animate-in', 'slide-in-from-right')">
            <span class="text-7xl font-light uppercase text-charm-cream-200">Charm</span>
        </div>
        <div class="px-5 lg:px-10 2xl:px-20 my-auto">
            <template x-for="(slide, index) in slides">
                <div x-cloak x-show="currentSlideIndex == index + 1" x-text="slide.description"
                    class="text-3xl lg:text-4xl 2xl:text-5xl font-black uppercase text-charm-cream-100 text-shadow-lg text-shadow-black/10 relative z-10 slide-text">
                </div>
            </template>
        </div>
        <div class="flex justify-between mb-5 px-5 lg:px-10 relative z-20">
            <button type="button" x-on:click="previous()" class="cursor-pointer group">
                <x-lucide-move-left stroke-width="0.8"
                    class="size-14 stroke-white group-hover:-translate-x-5 drop-shadow-lg transition-transform" />
            </button>
            <a href="#top" class="cursor-pointer animate-bounce block group">
                <x-lucide-move-down stroke-width="0.8"
                    class="size-14 stroke-white group-hover:translate-y-3 drop-shadow-lg transition-transform" />
            </a>
            <button type="button" x-on:click="next()" class="cursor-pointer group">
                <x-lucide-move-right stroke-width="0.8"
                    class="size-14 stroke-white group-hover:translate-x-5 drop-shadow-lg transition-transform" />
            </button>
        </div>
    </div>

    <div class="order-2 lg:order-2 w-full lg:w-1/2 border-s-6 border-double relative overflow-hidden">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div class="hidden lg:flex me-auto absolute top-24 p-2 w-auto bg-charm-dark-400 duration-1500"
            x-intersect="$el.classList.add('animate-in', 'slide-in-from-left')">
            <span class="text-7xl font-light uppercase text-charm-cream-200">Hair</span>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 flex h-2.5 w-full overflow-hidden bg-transparent z-60" role="progressbar"
        aria-label="autoplay progress bar" :aria-valuenow="Math.floor(progress)" aria-valuemin="0" aria-valuemax="100">
        <div class="h-full bg-charm-cream-400/50" :style="`width: ${progress}%`">
        </div>
    </div>
</div>

<style>
    .halftone::after {
        /* Cover our element */
        content: '';
        position: absolute;
        inset: 0;
        mask-image: linear-gradient(rgb(0 0 0 / .3), rgb(0 0 0 / 0));

        /* Dotted background */
        background-image: radial-gradient(circle at center,
                black 0.05rem,
                transparent 0);
        background-size: .25rem .25rem;
        background-position: 0 0, .26rem .26rem;
    }

    #stars,
    #stars2,
    #stars3 {
        position: absolute;
    }

    #stars {
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 1512px 1482px #FFF, 806px 1284px #FFF, 904px 395px #FFF, 562px 290px #FFF, 1423px 918px #FFF, 631px 65px #FFF, 1014px 1058px #FFF, 1719px 542px #FFF, 1551px 1757px #FFF, 406px 736px #FFF, 502px 18px #FFF, 869px 484px #FFF, 1341px 1859px #FFF, 1721px 657px #FFF, 208px 303px #FFF, 1777px 1681px #FFF, 371px 1578px #FFF, 420px 266px #FFF, 1036px 119px #FFF, 1078px 1006px #FFF, 839px 1281px #FFF, 153px 1668px #FFF, 220px 400px #FFF, 511px 75px #FFF, 1194px 1314px #FFF, 871px 1725px #FFF, 107px 907px #FFF, 571px 895px #FFF, 200px 1417px #FFF, 193px 1847px #FFF, 1959px 264px #FFF, 1695px 981px #FFF, 521px 1389px #FFF, 1881px 1998px #FFF, 573px 1103px #FFF, 50px 858px #FFF, 784px 1294px #FFF, 667px 1822px #FFF, 1669px 1627px #FFF, 1551px 424px #FFF, 1578px 1307px #FFF, 278px 256px #FFF, 1017px 1023px #FFF, 62px 1452px #FFF, 320px 105px #FFF, 526px 499px #FFF, 1213px 774px #FFF, 801px 314px #FFF, 1887px 499px #FFF, 955px 1534px #FFF, 246px 835px #FFF, 626px 815px #FFF, 683px 1013px #FFF, 1558px 862px #FFF, 463px 1009px #FFF, 1903px 173px #FFF, 988px 1684px #FFF, 1260px 900px #FFF, 364px 1418px #FFF, 1399px 1482px #FFF, 1194px 48px #FFF, 778px 1303px #FFF, 1967px 85px #FFF, 1106px 1260px #FFF, 1803px 1084px #FFF, 216px 713px #FFF, 1831px 847px #FFF, 1023px 452px #FFF, 575px 574px #FFF, 787px 500px #FFF, 1685px 1780px #FFF, 1510px 492px #FFF, 931px 459px #FFF, 762px 987px #FFF, 12px 145px #FFF, 680px 1690px #FFF, 713px 1698px #FFF, 657px 1536px #FFF, 1257px 1969px #FFF, 740px 1382px #FFF, 1678px 1589px #FFF, 1521px 252px #FFF, 1984px 572px #FFF, 1497px 650px #FFF, 1383px 612px #FFF, 1px 962px #FFF, 88px 225px #FFF, 714px 740px #FFF, 340px 768px #FFF, 212px 483px #FFF, 1582px 1365px #FFF, 1152px 823px #FFF, 1764px 1146px #FFF, 1674px 1028px #FFF, 813px 1539px #FFF, 601px 266px #FFF, 1954px 1394px #FFF, 1674px 1638px #FFF, 1779px 310px #FFF, 1339px 977px #FFF, 320px 1544px #FFF, 1406px 1778px #FFF, 330px 990px #FFF, 636px 1829px #FFF, 969px 1496px #FFF, 1008px 983px #FFF, 1867px 479px #FFF, 1651px 410px #FFF, 430px 1489px #FFF, 1491px 1393px #FFF, 626px 1641px #FFF, 264px 1215px #FFF, 286px 1888px #FFF, 330px 1594px #FFF, 737px 553px #FFF, 1824px 670px #FFF, 1381px 245px #FFF, 1990px 1704px #FFF, 1792px 1414px #FFF, 81px 344px #FFF, 34px 756px #FFF, 1471px 884px #FFF, 311px 647px #FFF, 1815px 68px #FFF, 733px 204px #FFF, 404px 405px #FFF, 1267px 1957px #FFF, 1242px 496px #FFF, 393px 118px #FFF, 1979px 1050px #FFF, 343px 1420px #FFF, 286px 905px #FFF, 423px 933px #FFF, 467px 560px #FFF, 330px 346px #FFF, 247px 1680px #FFF, 1166px 1405px #FFF, 347px 1815px #FFF, 57px 1053px #FFF, 531px 934px #FFF, 505px 519px #FFF, 383px 284px #FFF, 1425px 1276px #FFF, 202px 1752px #FFF, 1251px 30px #FFF, 291px 1730px #FFF, 934px 280px #FFF, 504px 460px #FFF, 939px 169px #FFF, 893px 804px #FFF, 826px 1044px #FFF, 1526px 897px #FFF, 162px 1856px #FFF, 1739px 1034px #FFF, 1716px 436px #FFF, 1891px 85px #FFF, 1686px 299px #FFF, 898px 1875px #FFF, 310px 72px #FFF, 1268px 476px #FFF, 1428px 164px #FFF, 1020px 343px #FFF, 939px 657px #FFF, 1892px 1642px #FFF, 220px 1908px #FFF, 931px 1446px #FFF, 1500px 1508px #FFF, 587px 242px #FFF, 1537px 98px #FFF, 236px 44px #FFF, 878px 678px #FFF, 479px 661px #FFF, 1132px 66px #FFF, 1363px 1051px #FFF, 1834px 192px #FFF, 1694px 444px #FFF, 867px 1516px #FFF, 1642px 631px #FFF, 658px 1593px #FFF, 1360px 1323px #FFF, 1016px 1441px #FFF, 1744px 401px #FFF, 1640px 1494px #FFF, 567px 1560px #FFF, 1767px 1260px #FFF, 1056px 623px #FFF, 1717px 1576px #FFF, 88px 1812px #FFF, 1274px 754px #FFF, 1284px 561px #FFF, 1270px 192px #FFF, 1068px 1188px #FFF, 1714px 1886px #FFF, 74px 256px #FFF, 740px 919px #FFF, 1452px 1390px #FFF, 1073px 1830px #FFF, 247px 975px #FFF, 1800px 1688px #FFF, 498px 107px #FFF, 157px 1981px #FFF, 1729px 1098px #FFF, 1652px 352px #FFF, 191px 553px #FFF, 1967px 1908px #FFF, 834px 885px #FFF, 933px 837px #FFF, 1641px 1117px #FFF, 216px 1094px #FFF, 1699px 40px #FFF, 757px 261px #FFF, 417px 1645px #FFF, 1522px 445px #FFF, 654px 527px #FFF, 1446px 1942px #FFF, 895px 1805px #FFF, 1475px 730px #FFF, 859px 1146px #FFF, 1877px 1417px #FFF, 271px 427px #FFF, 1585px 1846px #FFF, 5px 995px #FFF, 1937px 1786px #FFF, 1133px 1504px #FFF, 1148px 1437px #FFF, 1032px 1733px #FFF, 1993px 1374px #FFF, 1729px 307px #FFF, 954px 1614px #FFF, 162px 622px #FFF, 246px 1036px #FFF, 120px 1201px #FFF, 1764px 107px #FFF, 1223px 52px #FFF, 76px 1658px #FFF, 1401px 747px #FFF, 1001px 1094px #FFF, 1490px 296px #FFF, 1750px 500px #FFF, 533px 1595px #FFF, 240px 1439px #FFF, 1000px 437px #FFF, 1267px 717px #FFF, 696px 1032px #FFF, 707px 700px #FFF, 720px 390px #FFF, 554px 1268px #FFF, 1801px 1670px #FFF, 1307px 1489px #FFF, 1573px 1259px #FFF, 1431px 461px #FFF, 136px 336px #FFF, 1858px 1146px #FFF, 1812px 1149px #FFF, 1412px 118px #FFF, 1453px 1954px #FFF, 1354px 1833px #FFF, 1348px 1966px #FFF, 561px 1667px #FFF, 844px 553px #FFF, 1236px 1544px #FFF, 1794px 606px #FFF, 533px 1865px #FFF, 526px 441px #FFF, 1111px 1125px #FFF, 1451px 250px #FFF, 1121px 868px #FFF, 1126px 1700px #FFF, 1952px 1009px #FFF, 1793px 998px #FFF, 1784px 586px #FFF, 1585px 1251px #FFF, 49px 1968px #FFF, 1910px 1218px #FFF, 425px 1534px #FFF, 1225px 1500px #FFF, 1789px 1344px #FFF, 1277px 948px #FFF, 915px 1560px #FFF, 195px 1009px #FFF, 455px 855px #FFF, 1264px 1993px #FFF, 1153px 911px #FFF, 757px 410px #FFF, 715px 663px #FFF, 1244px 1737px #FFF, 88px 1273px #FFF, 1156px 1931px #FFF, 798px 507px #FFF, 1823px 62px #FFF, 1491px 1083px #FFF, 278px 201px #FFF, 591px 1012px #FFF, 1382px 899px #FFF, 833px 1263px #FFF, 355px 1561px #FFF, 1002px 878px #FFF, 621px 1556px #FFF, 733px 907px #FFF, 1503px 150px #FFF, 905px 321px #FFF, 665px 1870px #FFF, 608px 1170px #FFF, 929px 288px #FFF, 97px 603px #FFF, 88px 1493px #FFF, 1956px 904px #FFF, 894px 1568px #FFF, 1768px 1423px #FFF, 566px 1662px #FFF, 1762px 289px #FFF, 559px 958px #FFF, 1297px 821px #FFF, 985px 93px #FFF, 972px 1679px #FFF, 516px 1801px #FFF, 822px 1662px #FFF, 248px 1998px #FFF, 108px 1395px #FFF, 1474px 1820px #FFF, 992px 1924px #FFF, 1477px 841px #FFF, 1188px 631px #FFF, 1835px 861px #FFF, 1481px 360px #FFF, 1372px 224px #FFF, 501px 837px #FFF, 1381px 957px #FFF, 1262px 1842px #FFF, 565px 1623px #FFF, 1315px 1188px #FFF, 1806px 1542px #FFF, 814px 1723px #FFF, 1210px 637px #FFF, 1673px 1331px #FFF, 532px 773px #FFF, 171px 1597px #FFF, 1655px 447px #FFF, 1155px 1297px #FFF, 402px 743px #FFF, 790px 153px #FFF, 313px 461px #FFF, 1869px 1730px #FFF, 510px 976px #FFF, 490px 926px #FFF, 1406px 1795px #FFF, 1759px 1385px #FFF, 615px 1215px #FFF, 1001px 1859px #FFF, 1989px 1390px #FFF, 1459px 695px #FFF, 1660px 513px #FFF, 542px 1908px #FFF, 691px 821px #FFF, 443px 1331px #FFF, 326px 1503px #FFF, 31px 521px #FFF, 1595px 1598px #FFF, 483px 1768px #FFF, 1597px 19px #FFF, 1643px 1527px #FFF, 574px 1744px #FFF, 1419px 1864px #FFF, 1138px 913px #FFF, 1725px 986px #FFF, 39px 297px #FFF, 823px 1513px #FFF, 1360px 552px #FFF, 558px 958px #FFF, 904px 181px #FFF, 948px 1341px #FFF, 450px 1451px #FFF, 1552px 1155px #FFF, 155px 888px #FFF, 1161px 435px #FFF, 1595px 36px #FFF, 1088px 369px #FFF, 1948px 952px #FFF, 64px 1705px #FFF, 1707px 487px #FFF, 1747px 1759px #FFF, 1344px 1598px #FFF, 870px 566px #FFF, 1060px 331px #FFF, 620px 432px #FFF, 1995px 1475px #FFF, 1654px 368px #FFF, 1591px 1687px #FFF, 1154px 1144px #FFF, 536px 767px #FFF, 1233px 853px #FFF, 1588px 1960px #FFF, 1987px 747px #FFF, 1123px 1029px #FFF, 1045px 1241px #FFF, 53px 513px #FFF, 847px 236px #FFF, 1090px 1669px #FFF, 1310px 388px #FFF, 1330px 1855px #FFF, 1312px 351px #FFF, 285px 1759px #FFF, 307px 616px #FFF, 572px 1290px #FFF, 1791px 711px #FFF, 1722px 219px #FFF, 617px 670px #FFF, 465px 1654px #FFF, 240px 515px #FFF, 1492px 733px #FFF, 1978px 1631px #FFF, 359px 1875px #FFF, 1533px 998px #FFF, 747px 1116px #FFF, 1235px 78px #FFF, 1490px 1056px #FFF, 1599px 47px #FFF, 1241px 309px #FFF, 1396px 746px #FFF, 1648px 1240px #FFF, 1150px 1830px #FFF, 828px 1236px #FFF, 1885px 1628px #FFF, 1932px 1592px #FFF, 1678px 372px #FFF, 1109px 671px #FFF, 108px 1039px #FFF, 1661px 1685px #FFF, 749px 1458px #FFF, 1669px 426px #FFF, 339px 903px #FFF, 1943px 222px #FFF, 161px 463px #FFF, 842px 441px #FFF, 1405px 1440px #FFF, 1450px 1060px #FFF, 1205px 318px #FFF, 569px 1066px #FFF, 1922px 1126px #FFF, 1351px 329px #FFF, 522px 1458px #FFF, 1931px 1631px #FFF, 1123px 146px #FFF, 893px 1239px #FFF, 433px 1707px #FFF, 1946px 1670px #FFF, 920px 1229px #FFF, 1727px 1630px #FFF, 1210px 147px #FFF, 1449px 358px #FFF, 1597px 1797px #FFF, 1949px 1156px #FFF, 41px 1174px #FFF, 1043px 792px #FFF, 347px 113px #FFF, 35px 156px #FFF, 1082px 848px #FFF, 1515px 288px #FFF, 1705px 686px #FFF, 1293px 592px #FFF, 1982px 1573px #FFF, 930px 238px #FFF, 1493px 316px #FFF, 608px 677px #FFF, 1400px 215px #FFF, 482px 991px #FFF, 1450px 1457px #FFF, 1765px 1845px #FFF, 1318px 615px #FFF, 507px 1998px #FFF, 407px 1183px #FFF, 93px 579px #FFF, 1445px 1184px #FFF, 1799px 1800px #FFF, 1925px 1421px #FFF, 1671px 1613px #FFF, 1216px 725px #FFF, 1382px 729px #FFF, 45px 981px #FFF, 1214px 1305px #FFF, 326px 1841px #FFF, 1937px 662px #FFF, 712px 808px #FFF, 1021px 295px #FFF, 932px 1185px #FFF, 1227px 1262px #FFF, 715px 1553px #FFF, 943px 1793px #FFF, 123px 498px #FFF, 1909px 797px #FFF, 546px 1833px #FFF, 644px 537px #FFF, 1381px 1746px #FFF, 327px 372px #FFF, 1391px 979px #FFF, 6px 204px #FFF, 689px 576px #FFF, 1127px 1172px #FFF, 847px 1787px #FFF, 1272px 780px #FFF, 1772px 32px #FFF, 749px 1112px #FFF, 1248px 990px #FFF, 1291px 613px #FFF, 1816px 531px #FFF, 549px 1404px #FFF, 1285px 511px #FFF, 420px 1138px #FFF, 811px 1338px #FFF, 620px 1020px #FFF, 21px 1861px #FFF, 516px 1672px #FFF, 619px 1874px #FFF, 1854px 953px #FFF, 1320px 991px #FFF, 1971px 1102px #FFF, 1263px 1236px #FFF, 305px 768px #FFF, 1032px 1558px #FFF, 1266px 935px #FFF, 567px 1175px #FFF, 1392px 336px #FFF, 1293px 489px #FFF, 906px 867px #FFF, 1197px 25px #FFF, 760px 1341px #FFF, 737px 1543px #FFF, 1240px 935px #FFF, 474px 704px #FFF, 1331px 1841px #FFF, 344px 1794px #FFF, 61px 1821px #FFF, 252px 1608px #FFF, 1249px 1356px #FFF, 1168px 1066px #FFF, 1867px 1408px #FFF, 478px 1007px #FFF, 436px 793px #FFF, 1457px 710px #FFF, 811px 1791px #FFF, 1662px 850px #FFF, 1926px 532px #FFF, 1543px 962px #FFF, 974px 57px #FFF, 1987px 1674px #FFF, 728px 907px #FFF, 57px 880px #FFF, 519px 613px #FFF, 696px 1581px #FFF, 1003px 1867px #FFF, 1551px 1237px #FFF, 55px 1874px #FFF, 1320px 701px #FFF, 100px 1233px #FFF, 1259px 98px #FFF, 590px 1879px #FFF, 789px 1234px #FFF, 1696px 636px #FFF, 1216px 84px #FFF, 1637px 161px #FFF, 67px 357px #FFF, 153px 1532px #FFF, 1536px 423px #FFF, 1203px 1620px #FFF, 1665px 248px #FFF, 745px 1111px #FFF, 1766px 1822px #FFF, 1000px 1936px #FFF, 1979px 1272px #FFF, 920px 125px #FFF, 794px 378px #FFF, 1660px 1174px #FFF, 1415px 1716px #FFF, 357px 78px #FFF, 643px 1535px #FFF, 920px 495px #FFF, 563px 1669px #FFF, 1363px 1758px #FFF, 1684px 1508px #FFF, 1893px 1420px #FFF, 1876px 87px #FFF, 925px 1154px #FFF, 457px 1752px #FFF, 1686px 742px #FFF, 1231px 1147px #FFF, 1989px 1323px #FFF, 1370px 1313px #FFF, 767px 409px #FFF, 1173px 1217px #FFF, 446px 454px #FFF, 904px 689px #FFF, 33px 1998px #FFF, 775px 297px #FFF, 1002px 771px #FFF, 1369px 962px #FFF, 1224px 994px #FFF, 1350px 1948px #FFF, 1784px 619px #FFF, 1888px 1152px #FFF, 1669px 52px #FFF, 279px 27px #FFF, 499px 1614px #FFF, 630px 132px #FFF, 606px 827px #FFF, 576px 1073px #FFF, 219px 1992px #FFF, 1053px 1536px #FFF, 1451px 459px #FFF, 88px 1481px #FFF, 671px 877px #FFF, 31px 124px #FFF, 900px 432px #FFF, 242px 127px #FFF, 1418px 1503px #FFF, 557px 1553px #FFF, 1701px 1771px #FFF, 952px 913px #FFF, 1199px 732px #FFF, 8px 315px #FFF, 1627px 1092px #FFF, 240px 280px #FFF, 106px 1561px #FFF, 1471px 1455px #FFF, 524px 92px #FFF, 971px 1828px #FFF, 254px 1809px #FFF, 274px 1913px #FFF, 1594px 1879px #FFF, 1796px 472px #FFF, 697px 863px #FFF, 1936px 905px #FFF, 1600px 861px #FFF, 873px 1883px #FFF, 1485px 864px #FFF, 1872px 13px #FFF, 868px 973px #FFF, 1739px 780px #FFF, 1021px 1692px #FFF, 1061px 245px #FFF, 1168px 935px #FFF, 1107px 1590px #FFF, 1093px 1740px #FFF, 943px 1178px #FFF, 1306px 1609px #FFF, 75px 855px #FFF, 1728px 69px #FFF, 43px 1918px #FFF, 1321px 1389px #FFF, 1747px 1052px #FFF, 654px 1209px #FFF, 1340px 1500px #FFF, 79px 1999px #FFF, 1368px 1703px #FFF, 1125px 620px #FFF, 1087px 1565px #FFF, 1408px 394px #FFF, 258px 1636px #FFF, 918px 92px #FFF, 1612px 565px #FFF, 1673px 967px #FFF, 1272px 268px #FFF, 793px 1373px #FFF, 1047px 597px #FFF, 1060px 1959px #FFF, 1420px 1545px #FFF, 34px 1874px #FFF, 260px 265px #FFF, 1436px 1170px #FFF, 1990px 1380px #FFF, 929px 865px #FFF, 169px 1257px #FFF, 486px 109px #FFF, 1738px 1716px #FFF, 459px 23px #FFF, 1926px 1310px #FFF, 1038px 280px #FFF, 809px 816px #FFF, 1881px 330px #FFF, 1271px 21px #FFF, 1034px 1024px #FFF, 1570px 665px #FFF, 142px 556px #FFF, 323px 1924px #FFF, 539px 276px #FFF, 1207px 186px #FFF, 713px 183px #FFF, 1785px 916px #FFF, 1538px 304px #FFF, 24px 288px #FFF, 1225px 193px #FFF, 347px 211px #FFF, 1842px 754px #FFF, 679px 908px #FFF, 771px 786px #FFF, 1217px 1495px #FFF, 1578px 217px #FFF, 1429px 382px #FFF, 571px 1983px #FFF, 468px 1254px #FFF, 534px 1868px #FFF;
        animation: animStar 50s linear infinite;
    }

    #stars:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1512px 1482px #FFF, 806px 1284px #FFF, 904px 395px #FFF, 562px 290px #FFF, 1423px 918px #FFF, 631px 65px #FFF, 1014px 1058px #FFF, 1719px 542px #FFF, 1551px 1757px #FFF, 406px 736px #FFF, 502px 18px #FFF, 869px 484px #FFF, 1341px 1859px #FFF, 1721px 657px #FFF, 208px 303px #FFF, 1777px 1681px #FFF, 371px 1578px #FFF, 420px 266px #FFF, 1036px 119px #FFF, 1078px 1006px #FFF, 839px 1281px #FFF, 153px 1668px #FFF, 220px 400px #FFF, 511px 75px #FFF, 1194px 1314px #FFF, 871px 1725px #FFF, 107px 907px #FFF, 571px 895px #FFF, 200px 1417px #FFF, 193px 1847px #FFF, 1959px 264px #FFF, 1695px 981px #FFF, 521px 1389px #FFF, 1881px 1998px #FFF, 573px 1103px #FFF, 50px 858px #FFF, 784px 1294px #FFF, 667px 1822px #FFF, 1669px 1627px #FFF, 1551px 424px #FFF, 1578px 1307px #FFF, 278px 256px #FFF, 1017px 1023px #FFF, 62px 1452px #FFF, 320px 105px #FFF, 526px 499px #FFF, 1213px 774px #FFF, 801px 314px #FFF, 1887px 499px #FFF, 955px 1534px #FFF, 246px 835px #FFF, 626px 815px #FFF, 683px 1013px #FFF, 1558px 862px #FFF, 463px 1009px #FFF, 1903px 173px #FFF, 988px 1684px #FFF, 1260px 900px #FFF, 364px 1418px #FFF, 1399px 1482px #FFF, 1194px 48px #FFF, 778px 1303px #FFF, 1967px 85px #FFF, 1106px 1260px #FFF, 1803px 1084px #FFF, 216px 713px #FFF, 1831px 847px #FFF, 1023px 452px #FFF, 575px 574px #FFF, 787px 500px #FFF, 1685px 1780px #FFF, 1510px 492px #FFF, 931px 459px #FFF, 762px 987px #FFF, 12px 145px #FFF, 680px 1690px #FFF, 713px 1698px #FFF, 657px 1536px #FFF, 1257px 1969px #FFF, 740px 1382px #FFF, 1678px 1589px #FFF, 1521px 252px #FFF, 1984px 572px #FFF, 1497px 650px #FFF, 1383px 612px #FFF, 1px 962px #FFF, 88px 225px #FFF, 714px 740px #FFF, 340px 768px #FFF, 212px 483px #FFF, 1582px 1365px #FFF, 1152px 823px #FFF, 1764px 1146px #FFF, 1674px 1028px #FFF, 813px 1539px #FFF, 601px 266px #FFF, 1954px 1394px #FFF, 1674px 1638px #FFF, 1779px 310px #FFF, 1339px 977px #FFF, 320px 1544px #FFF, 1406px 1778px #FFF, 330px 990px #FFF, 636px 1829px #FFF, 969px 1496px #FFF, 1008px 983px #FFF, 1867px 479px #FFF, 1651px 410px #FFF, 430px 1489px #FFF, 1491px 1393px #FFF, 626px 1641px #FFF, 264px 1215px #FFF, 286px 1888px #FFF, 330px 1594px #FFF, 737px 553px #FFF, 1824px 670px #FFF, 1381px 245px #FFF, 1990px 1704px #FFF, 1792px 1414px #FFF, 81px 344px #FFF, 34px 756px #FFF, 1471px 884px #FFF, 311px 647px #FFF, 1815px 68px #FFF, 733px 204px #FFF, 404px 405px #FFF, 1267px 1957px #FFF, 1242px 496px #FFF, 393px 118px #FFF, 1979px 1050px #FFF, 343px 1420px #FFF, 286px 905px #FFF, 423px 933px #FFF, 467px 560px #FFF, 330px 346px #FFF, 247px 1680px #FFF, 1166px 1405px #FFF, 347px 1815px #FFF, 57px 1053px #FFF, 531px 934px #FFF, 505px 519px #FFF, 383px 284px #FFF, 1425px 1276px #FFF, 202px 1752px #FFF, 1251px 30px #FFF, 291px 1730px #FFF, 934px 280px #FFF, 504px 460px #FFF, 939px 169px #FFF, 893px 804px #FFF, 826px 1044px #FFF, 1526px 897px #FFF, 162px 1856px #FFF, 1739px 1034px #FFF, 1716px 436px #FFF, 1891px 85px #FFF, 1686px 299px #FFF, 898px 1875px #FFF, 310px 72px #FFF, 1268px 476px #FFF, 1428px 164px #FFF, 1020px 343px #FFF, 939px 657px #FFF, 1892px 1642px #FFF, 220px 1908px #FFF, 931px 1446px #FFF, 1500px 1508px #FFF, 587px 242px #FFF, 1537px 98px #FFF, 236px 44px #FFF, 878px 678px #FFF, 479px 661px #FFF, 1132px 66px #FFF, 1363px 1051px #FFF, 1834px 192px #FFF, 1694px 444px #FFF, 867px 1516px #FFF, 1642px 631px #FFF, 658px 1593px #FFF, 1360px 1323px #FFF, 1016px 1441px #FFF, 1744px 401px #FFF, 1640px 1494px #FFF, 567px 1560px #FFF, 1767px 1260px #FFF, 1056px 623px #FFF, 1717px 1576px #FFF, 88px 1812px #FFF, 1274px 754px #FFF, 1284px 561px #FFF, 1270px 192px #FFF, 1068px 1188px #FFF, 1714px 1886px #FFF, 74px 256px #FFF, 740px 919px #FFF, 1452px 1390px #FFF, 1073px 1830px #FFF, 247px 975px #FFF, 1800px 1688px #FFF, 498px 107px #FFF, 157px 1981px #FFF, 1729px 1098px #FFF, 1652px 352px #FFF, 191px 553px #FFF, 1967px 1908px #FFF, 834px 885px #FFF, 933px 837px #FFF, 1641px 1117px #FFF, 216px 1094px #FFF, 1699px 40px #FFF, 757px 261px #FFF, 417px 1645px #FFF, 1522px 445px #FFF, 654px 527px #FFF, 1446px 1942px #FFF, 895px 1805px #FFF, 1475px 730px #FFF, 859px 1146px #FFF, 1877px 1417px #FFF, 271px 427px #FFF, 1585px 1846px #FFF, 5px 995px #FFF, 1937px 1786px #FFF, 1133px 1504px #FFF, 1148px 1437px #FFF, 1032px 1733px #FFF, 1993px 1374px #FFF, 1729px 307px #FFF, 954px 1614px #FFF, 162px 622px #FFF, 246px 1036px #FFF, 120px 1201px #FFF, 1764px 107px #FFF, 1223px 52px #FFF, 76px 1658px #FFF, 1401px 747px #FFF, 1001px 1094px #FFF, 1490px 296px #FFF, 1750px 500px #FFF, 533px 1595px #FFF, 240px 1439px #FFF, 1000px 437px #FFF, 1267px 717px #FFF, 696px 1032px #FFF, 707px 700px #FFF, 720px 390px #FFF, 554px 1268px #FFF, 1801px 1670px #FFF, 1307px 1489px #FFF, 1573px 1259px #FFF, 1431px 461px #FFF, 136px 336px #FFF, 1858px 1146px #FFF, 1812px 1149px #FFF, 1412px 118px #FFF, 1453px 1954px #FFF, 1354px 1833px #FFF, 1348px 1966px #FFF, 561px 1667px #FFF, 844px 553px #FFF, 1236px 1544px #FFF, 1794px 606px #FFF, 533px 1865px #FFF, 526px 441px #FFF, 1111px 1125px #FFF, 1451px 250px #FFF, 1121px 868px #FFF, 1126px 1700px #FFF, 1952px 1009px #FFF, 1793px 998px #FFF, 1784px 586px #FFF, 1585px 1251px #FFF, 49px 1968px #FFF, 1910px 1218px #FFF, 425px 1534px #FFF, 1225px 1500px #FFF, 1789px 1344px #FFF, 1277px 948px #FFF, 915px 1560px #FFF, 195px 1009px #FFF, 455px 855px #FFF, 1264px 1993px #FFF, 1153px 911px #FFF, 757px 410px #FFF, 715px 663px #FFF, 1244px 1737px #FFF, 88px 1273px #FFF, 1156px 1931px #FFF, 798px 507px #FFF, 1823px 62px #FFF, 1491px 1083px #FFF, 278px 201px #FFF, 591px 1012px #FFF, 1382px 899px #FFF, 833px 1263px #FFF, 355px 1561px #FFF, 1002px 878px #FFF, 621px 1556px #FFF, 733px 907px #FFF, 1503px 150px #FFF, 905px 321px #FFF, 665px 1870px #FFF, 608px 1170px #FFF, 929px 288px #FFF, 97px 603px #FFF, 88px 1493px #FFF, 1956px 904px #FFF, 894px 1568px #FFF, 1768px 1423px #FFF, 566px 1662px #FFF, 1762px 289px #FFF, 559px 958px #FFF, 1297px 821px #FFF, 985px 93px #FFF, 972px 1679px #FFF, 516px 1801px #FFF, 822px 1662px #FFF, 248px 1998px #FFF, 108px 1395px #FFF, 1474px 1820px #FFF, 992px 1924px #FFF, 1477px 841px #FFF, 1188px 631px #FFF, 1835px 861px #FFF, 1481px 360px #FFF, 1372px 224px #FFF, 501px 837px #FFF, 1381px 957px #FFF, 1262px 1842px #FFF, 565px 1623px #FFF, 1315px 1188px #FFF, 1806px 1542px #FFF, 814px 1723px #FFF, 1210px 637px #FFF, 1673px 1331px #FFF, 532px 773px #FFF, 171px 1597px #FFF, 1655px 447px #FFF, 1155px 1297px #FFF, 402px 743px #FFF, 790px 153px #FFF, 313px 461px #FFF, 1869px 1730px #FFF, 510px 976px #FFF, 490px 926px #FFF, 1406px 1795px #FFF, 1759px 1385px #FFF, 615px 1215px #FFF, 1001px 1859px #FFF, 1989px 1390px #FFF, 1459px 695px #FFF, 1660px 513px #FFF, 542px 1908px #FFF, 691px 821px #FFF, 443px 1331px #FFF, 326px 1503px #FFF, 31px 521px #FFF, 1595px 1598px #FFF, 483px 1768px #FFF, 1597px 19px #FFF, 1643px 1527px #FFF, 574px 1744px #FFF, 1419px 1864px #FFF, 1138px 913px #FFF, 1725px 986px #FFF, 39px 297px #FFF, 823px 1513px #FFF, 1360px 552px #FFF, 558px 958px #FFF, 904px 181px #FFF, 948px 1341px #FFF, 450px 1451px #FFF, 1552px 1155px #FFF, 155px 888px #FFF, 1161px 435px #FFF, 1595px 36px #FFF, 1088px 369px #FFF, 1948px 952px #FFF, 64px 1705px #FFF, 1707px 487px #FFF, 1747px 1759px #FFF, 1344px 1598px #FFF, 870px 566px #FFF, 1060px 331px #FFF, 620px 432px #FFF, 1995px 1475px #FFF, 1654px 368px #FFF, 1591px 1687px #FFF, 1154px 1144px #FFF, 536px 767px #FFF, 1233px 853px #FFF, 1588px 1960px #FFF, 1987px 747px #FFF, 1123px 1029px #FFF, 1045px 1241px #FFF, 53px 513px #FFF, 847px 236px #FFF, 1090px 1669px #FFF, 1310px 388px #FFF, 1330px 1855px #FFF, 1312px 351px #FFF, 285px 1759px #FFF, 307px 616px #FFF, 572px 1290px #FFF, 1791px 711px #FFF, 1722px 219px #FFF, 617px 670px #FFF, 465px 1654px #FFF, 240px 515px #FFF, 1492px 733px #FFF, 1978px 1631px #FFF, 359px 1875px #FFF, 1533px 998px #FFF, 747px 1116px #FFF, 1235px 78px #FFF, 1490px 1056px #FFF, 1599px 47px #FFF, 1241px 309px #FFF, 1396px 746px #FFF, 1648px 1240px #FFF, 1150px 1830px #FFF, 828px 1236px #FFF, 1885px 1628px #FFF, 1932px 1592px #FFF, 1678px 372px #FFF, 1109px 671px #FFF, 108px 1039px #FFF, 1661px 1685px #FFF, 749px 1458px #FFF, 1669px 426px #FFF, 339px 903px #FFF, 1943px 222px #FFF, 161px 463px #FFF, 842px 441px #FFF, 1405px 1440px #FFF, 1450px 1060px #FFF, 1205px 318px #FFF, 569px 1066px #FFF, 1922px 1126px #FFF, 1351px 329px #FFF, 522px 1458px #FFF, 1931px 1631px #FFF, 1123px 146px #FFF, 893px 1239px #FFF, 433px 1707px #FFF, 1946px 1670px #FFF, 920px 1229px #FFF, 1727px 1630px #FFF, 1210px 147px #FFF, 1449px 358px #FFF, 1597px 1797px #FFF, 1949px 1156px #FFF, 41px 1174px #FFF, 1043px 792px #FFF, 347px 113px #FFF, 35px 156px #FFF, 1082px 848px #FFF, 1515px 288px #FFF, 1705px 686px #FFF, 1293px 592px #FFF, 1982px 1573px #FFF, 930px 238px #FFF, 1493px 316px #FFF, 608px 677px #FFF, 1400px 215px #FFF, 482px 991px #FFF, 1450px 1457px #FFF, 1765px 1845px #FFF, 1318px 615px #FFF, 507px 1998px #FFF, 407px 1183px #FFF, 93px 579px #FFF, 1445px 1184px #FFF, 1799px 1800px #FFF, 1925px 1421px #FFF, 1671px 1613px #FFF, 1216px 725px #FFF, 1382px 729px #FFF, 45px 981px #FFF, 1214px 1305px #FFF, 326px 1841px #FFF, 1937px 662px #FFF, 712px 808px #FFF, 1021px 295px #FFF, 932px 1185px #FFF, 1227px 1262px #FFF, 715px 1553px #FFF, 943px 1793px #FFF, 123px 498px #FFF, 1909px 797px #FFF, 546px 1833px #FFF, 644px 537px #FFF, 1381px 1746px #FFF, 327px 372px #FFF, 1391px 979px #FFF, 6px 204px #FFF, 689px 576px #FFF, 1127px 1172px #FFF, 847px 1787px #FFF, 1272px 780px #FFF, 1772px 32px #FFF, 749px 1112px #FFF, 1248px 990px #FFF, 1291px 613px #FFF, 1816px 531px #FFF, 549px 1404px #FFF, 1285px 511px #FFF, 420px 1138px #FFF, 811px 1338px #FFF, 620px 1020px #FFF, 21px 1861px #FFF, 516px 1672px #FFF, 619px 1874px #FFF, 1854px 953px #FFF, 1320px 991px #FFF, 1971px 1102px #FFF, 1263px 1236px #FFF, 305px 768px #FFF, 1032px 1558px #FFF, 1266px 935px #FFF, 567px 1175px #FFF, 1392px 336px #FFF, 1293px 489px #FFF, 906px 867px #FFF, 1197px 25px #FFF, 760px 1341px #FFF, 737px 1543px #FFF, 1240px 935px #FFF, 474px 704px #FFF, 1331px 1841px #FFF, 344px 1794px #FFF, 61px 1821px #FFF, 252px 1608px #FFF, 1249px 1356px #FFF, 1168px 1066px #FFF, 1867px 1408px #FFF, 478px 1007px #FFF, 436px 793px #FFF, 1457px 710px #FFF, 811px 1791px #FFF, 1662px 850px #FFF, 1926px 532px #FFF, 1543px 962px #FFF, 974px 57px #FFF, 1987px 1674px #FFF, 728px 907px #FFF, 57px 880px #FFF, 519px 613px #FFF, 696px 1581px #FFF, 1003px 1867px #FFF, 1551px 1237px #FFF, 55px 1874px #FFF, 1320px 701px #FFF, 100px 1233px #FFF, 1259px 98px #FFF, 590px 1879px #FFF, 789px 1234px #FFF, 1696px 636px #FFF, 1216px 84px #FFF, 1637px 161px #FFF, 67px 357px #FFF, 153px 1532px #FFF, 1536px 423px #FFF, 1203px 1620px #FFF, 1665px 248px #FFF, 745px 1111px #FFF, 1766px 1822px #FFF, 1000px 1936px #FFF, 1979px 1272px #FFF, 920px 125px #FFF, 794px 378px #FFF, 1660px 1174px #FFF, 1415px 1716px #FFF, 357px 78px #FFF, 643px 1535px #FFF, 920px 495px #FFF, 563px 1669px #FFF, 1363px 1758px #FFF, 1684px 1508px #FFF, 1893px 1420px #FFF, 1876px 87px #FFF, 925px 1154px #FFF, 457px 1752px #FFF, 1686px 742px #FFF, 1231px 1147px #FFF, 1989px 1323px #FFF, 1370px 1313px #FFF, 767px 409px #FFF, 1173px 1217px #FFF, 446px 454px #FFF, 904px 689px #FFF, 33px 1998px #FFF, 775px 297px #FFF, 1002px 771px #FFF, 1369px 962px #FFF, 1224px 994px #FFF, 1350px 1948px #FFF, 1784px 619px #FFF, 1888px 1152px #FFF, 1669px 52px #FFF, 279px 27px #FFF, 499px 1614px #FFF, 630px 132px #FFF, 606px 827px #FFF, 576px 1073px #FFF, 219px 1992px #FFF, 1053px 1536px #FFF, 1451px 459px #FFF, 88px 1481px #FFF, 671px 877px #FFF, 31px 124px #FFF, 900px 432px #FFF, 242px 127px #FFF, 1418px 1503px #FFF, 557px 1553px #FFF, 1701px 1771px #FFF, 952px 913px #FFF, 1199px 732px #FFF, 8px 315px #FFF, 1627px 1092px #FFF, 240px 280px #FFF, 106px 1561px #FFF, 1471px 1455px #FFF, 524px 92px #FFF, 971px 1828px #FFF, 254px 1809px #FFF, 274px 1913px #FFF, 1594px 1879px #FFF, 1796px 472px #FFF, 697px 863px #FFF, 1936px 905px #FFF, 1600px 861px #FFF, 873px 1883px #FFF, 1485px 864px #FFF, 1872px 13px #FFF, 868px 973px #FFF, 1739px 780px #FFF, 1021px 1692px #FFF, 1061px 245px #FFF, 1168px 935px #FFF, 1107px 1590px #FFF, 1093px 1740px #FFF, 943px 1178px #FFF, 1306px 1609px #FFF, 75px 855px #FFF, 1728px 69px #FFF, 43px 1918px #FFF, 1321px 1389px #FFF, 1747px 1052px #FFF, 654px 1209px #FFF, 1340px 1500px #FFF, 79px 1999px #FFF, 1368px 1703px #FFF, 1125px 620px #FFF, 1087px 1565px #FFF, 1408px 394px #FFF, 258px 1636px #FFF, 918px 92px #FFF, 1612px 565px #FFF, 1673px 967px #FFF, 1272px 268px #FFF, 793px 1373px #FFF, 1047px 597px #FFF, 1060px 1959px #FFF, 1420px 1545px #FFF, 34px 1874px #FFF, 260px 265px #FFF, 1436px 1170px #FFF, 1990px 1380px #FFF, 929px 865px #FFF, 169px 1257px #FFF, 486px 109px #FFF, 1738px 1716px #FFF, 459px 23px #FFF, 1926px 1310px #FFF, 1038px 280px #FFF, 809px 816px #FFF, 1881px 330px #FFF, 1271px 21px #FFF, 1034px 1024px #FFF, 1570px 665px #FFF, 142px 556px #FFF, 323px 1924px #FFF, 539px 276px #FFF, 1207px 186px #FFF, 713px 183px #FFF, 1785px 916px #FFF, 1538px 304px #FFF, 24px 288px #FFF, 1225px 193px #FFF, 347px 211px #FFF, 1842px 754px #FFF, 679px 908px #FFF, 771px 786px #FFF, 1217px 1495px #FFF, 1578px 217px #FFF, 1429px 382px #FFF, 571px 1983px #FFF, 468px 1254px #FFF, 534px 1868px #FFF;
    }

    #stars2 {
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1357px 1575px #FFF, 1551px 1026px #FFF, 508px 373px #FFF, 592px 688px #FFF, 1102px 894px #FFF, 220px 1535px #FFF, 1614px 1049px #FFF, 293px 1798px #FFF, 810px 1673px #FFF, 183px 227px #FFF, 506px 213px #FFF, 972px 1512px #FFF, 192px 895px #FFF, 461px 1498px #FFF, 620px 390px #FFF, 1887px 1034px #FFF, 70px 1809px #FFF, 1554px 522px #FFF, 1996px 351px #FFF, 666px 816px #FFF, 1689px 1673px #FFF, 117px 117px #FFF, 1179px 1826px #FFF, 628px 928px #FFF, 1556px 601px #FFF, 1110px 1468px #FFF, 257px 531px #FFF, 913px 331px #FFF, 1314px 1418px #FFF, 1955px 1979px #FFF, 1446px 1166px #FFF, 391px 30px #FFF, 787px 1535px #FFF, 1807px 480px #FFF, 1615px 1407px #FFF, 1879px 338px #FFF, 147px 1688px #FFF, 968px 1571px #FFF, 7px 1355px #FFF, 1864px 1572px #FFF, 987px 1225px #FFF, 789px 37px #FFF, 555px 958px #FFF, 1920px 1778px #FFF, 847px 586px #FFF, 1928px 1329px #FFF, 1798px 663px #FFF, 534px 660px #FFF, 827px 19px #FFF, 1790px 1668px #FFF, 527px 1478px #FFF, 541px 1559px #FFF, 1005px 1878px #FFF, 1784px 331px #FFF, 136px 1240px #FFF, 1608px 1615px #FFF, 1373px 1147px #FFF, 1659px 147px #FFF, 457px 655px #FFF, 1278px 1596px #FFF, 129px 1392px #FFF, 1547px 212px #FFF, 118px 1548px #FFF, 1150px 778px #FFF, 1556px 1754px #FFF, 1012px 1199px #FFF, 778px 530px #FFF, 1237px 1417px #FFF, 1328px 1104px #FFF, 1447px 1547px #FFF, 554px 1745px #FFF, 1529px 758px #FFF, 1273px 1843px #FFF, 1616px 233px #FFF, 893px 1162px #FFF, 231px 1802px #FFF, 1041px 876px #FFF, 444px 2000px #FFF, 1910px 1187px #FFF, 279px 1324px #FFF, 222px 170px #FFF, 491px 1638px #FFF, 5px 1008px #FFF, 1170px 891px #FFF, 583px 671px #FFF, 1024px 256px #FFF, 1776px 33px #FFF, 312px 741px #FFF, 638px 1901px #FFF, 789px 1393px #FFF, 937px 74px #FFF, 355px 895px #FFF, 882px 1738px #FFF, 844px 1125px #FFF, 268px 1577px #FFF, 813px 991px #FFF, 1381px 1353px #FFF, 1169px 1943px #FFF, 1673px 605px #FFF, 1541px 132px #FFF, 1641px 171px #FFF, 860px 1089px #FFF, 1273px 752px #FFF, 1030px 235px #FFF, 1673px 248px #FFF, 1899px 430px #FFF, 1984px 1921px #FFF, 1121px 1903px #FFF, 678px 1256px #FFF, 842px 1741px #FFF, 1094px 24px #FFF, 1073px 809px #FFF, 332px 731px #FFF, 607px 1839px #FFF, 814px 1211px #FFF, 1792px 64px #FFF, 1809px 570px #FFF, 1044px 290px #FFF, 354px 648px #FFF, 853px 1143px #FFF, 1863px 667px #FFF, 1323px 1130px #FFF, 1192px 404px #FFF, 62px 1416px #FFF, 151px 172px #FFF, 685px 171px #FFF, 1348px 271px #FFF, 852px 595px #FFF, 1375px 99px #FFF, 1942px 494px #FFF, 506px 1688px #FFF, 20px 1168px #FFF, 539px 1644px #FFF, 555px 593px #FFF, 929px 545px #FFF, 1630px 443px #FFF, 1404px 479px #FFF, 1799px 327px #FFF, 1611px 568px #FFF, 1443px 148px #FFF, 808px 1997px #FFF, 716px 303px #FFF, 1545px 1573px #FFF, 1532px 1820px #FFF, 1515px 1468px #FFF, 1346px 682px #FFF, 1819px 1190px #FFF, 494px 181px #FFF, 659px 523px #FFF, 1765px 646px #FFF, 562px 1282px #FFF, 96px 1459px #FFF, 1081px 318px #FFF, 1757px 1519px #FFF, 1197px 1710px #FFF, 1832px 1019px #FFF, 56px 1748px #FFF, 337px 112px #FFF, 1545px 790px #FFF, 1963px 390px #FFF, 1769px 1952px #FFF, 327px 1987px #FFF, 250px 354px #FFF, 1373px 1391px #FFF, 1197px 1405px #FFF, 932px 343px #FFF, 1878px 194px #FFF, 1420px 703px #FFF, 1381px 1409px #FFF, 1671px 103px #FFF, 1072px 1022px #FFF, 13px 882px #FFF, 699px 1510px #FFF, 457px 1879px #FFF, 506px 1098px #FFF, 1679px 1760px #FFF, 1231px 1479px #FFF, 1707px 1359px #FFF, 180px 1492px #FFF, 1413px 954px #FFF, 942px 719px #FFF, 1797px 33px #FFF, 1192px 20px #FFF, 696px 1277px #FFF, 929px 578px #FFF, 1190px 1532px #FFF, 425px 995px #FFF, 1171px 944px #FFF, 617px 839px #FFF, 574px 365px #FFF, 1830px 1663px #FFF, 1074px 1358px #FFF, 239px 720px #FFF, 1771px 1223px #FFF, 1476px 1844px #FFF, 1756px 100px #FFF, 888px 1498px #FFF, 1798px 121px #FFF, 35px 102px #FFF, 223px 1710px #FFF;
        animation: animStar 100s linear infinite;
    }

    #stars2:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1357px 1575px #FFF, 1551px 1026px #FFF, 508px 373px #FFF, 592px 688px #FFF, 1102px 894px #FFF, 220px 1535px #FFF, 1614px 1049px #FFF, 293px 1798px #FFF, 810px 1673px #FFF, 183px 227px #FFF, 506px 213px #FFF, 972px 1512px #FFF, 192px 895px #FFF, 461px 1498px #FFF, 620px 390px #FFF, 1887px 1034px #FFF, 70px 1809px #FFF, 1554px 522px #FFF, 1996px 351px #FFF, 666px 816px #FFF, 1689px 1673px #FFF, 117px 117px #FFF, 1179px 1826px #FFF, 628px 928px #FFF, 1556px 601px #FFF, 1110px 1468px #FFF, 257px 531px #FFF, 913px 331px #FFF, 1314px 1418px #FFF, 1955px 1979px #FFF, 1446px 1166px #FFF, 391px 30px #FFF, 787px 1535px #FFF, 1807px 480px #FFF, 1615px 1407px #FFF, 1879px 338px #FFF, 147px 1688px #FFF, 968px 1571px #FFF, 7px 1355px #FFF, 1864px 1572px #FFF, 987px 1225px #FFF, 789px 37px #FFF, 555px 958px #FFF, 1920px 1778px #FFF, 847px 586px #FFF, 1928px 1329px #FFF, 1798px 663px #FFF, 534px 660px #FFF, 827px 19px #FFF, 1790px 1668px #FFF, 527px 1478px #FFF, 541px 1559px #FFF, 1005px 1878px #FFF, 1784px 331px #FFF, 136px 1240px #FFF, 1608px 1615px #FFF, 1373px 1147px #FFF, 1659px 147px #FFF, 457px 655px #FFF, 1278px 1596px #FFF, 129px 1392px #FFF, 1547px 212px #FFF, 118px 1548px #FFF, 1150px 778px #FFF, 1556px 1754px #FFF, 1012px 1199px #FFF, 778px 530px #FFF, 1237px 1417px #FFF, 1328px 1104px #FFF, 1447px 1547px #FFF, 554px 1745px #FFF, 1529px 758px #FFF, 1273px 1843px #FFF, 1616px 233px #FFF, 893px 1162px #FFF, 231px 1802px #FFF, 1041px 876px #FFF, 444px 2000px #FFF, 1910px 1187px #FFF, 279px 1324px #FFF, 222px 170px #FFF, 491px 1638px #FFF, 5px 1008px #FFF, 1170px 891px #FFF, 583px 671px #FFF, 1024px 256px #FFF, 1776px 33px #FFF, 312px 741px #FFF, 638px 1901px #FFF, 789px 1393px #FFF, 937px 74px #FFF, 355px 895px #FFF, 882px 1738px #FFF, 844px 1125px #FFF, 268px 1577px #FFF, 813px 991px #FFF, 1381px 1353px #FFF, 1169px 1943px #FFF, 1673px 605px #FFF, 1541px 132px #FFF, 1641px 171px #FFF, 860px 1089px #FFF, 1273px 752px #FFF, 1030px 235px #FFF, 1673px 248px #FFF, 1899px 430px #FFF, 1984px 1921px #FFF, 1121px 1903px #FFF, 678px 1256px #FFF, 842px 1741px #FFF, 1094px 24px #FFF, 1073px 809px #FFF, 332px 731px #FFF, 607px 1839px #FFF, 814px 1211px #FFF, 1792px 64px #FFF, 1809px 570px #FFF, 1044px 290px #FFF, 354px 648px #FFF, 853px 1143px #FFF, 1863px 667px #FFF, 1323px 1130px #FFF, 1192px 404px #FFF, 62px 1416px #FFF, 151px 172px #FFF, 685px 171px #FFF, 1348px 271px #FFF, 852px 595px #FFF, 1375px 99px #FFF, 1942px 494px #FFF, 506px 1688px #FFF, 20px 1168px #FFF, 539px 1644px #FFF, 555px 593px #FFF, 929px 545px #FFF, 1630px 443px #FFF, 1404px 479px #FFF, 1799px 327px #FFF, 1611px 568px #FFF, 1443px 148px #FFF, 808px 1997px #FFF, 716px 303px #FFF, 1545px 1573px #FFF, 1532px 1820px #FFF, 1515px 1468px #FFF, 1346px 682px #FFF, 1819px 1190px #FFF, 494px 181px #FFF, 659px 523px #FFF, 1765px 646px #FFF, 562px 1282px #FFF, 96px 1459px #FFF, 1081px 318px #FFF, 1757px 1519px #FFF, 1197px 1710px #FFF, 1832px 1019px #FFF, 56px 1748px #FFF, 337px 112px #FFF, 1545px 790px #FFF, 1963px 390px #FFF, 1769px 1952px #FFF, 327px 1987px #FFF, 250px 354px #FFF, 1373px 1391px #FFF, 1197px 1405px #FFF, 932px 343px #FFF, 1878px 194px #FFF, 1420px 703px #FFF, 1381px 1409px #FFF, 1671px 103px #FFF, 1072px 1022px #FFF, 13px 882px #FFF, 699px 1510px #FFF, 457px 1879px #FFF, 506px 1098px #FFF, 1679px 1760px #FFF, 1231px 1479px #FFF, 1707px 1359px #FFF, 180px 1492px #FFF, 1413px 954px #FFF, 942px 719px #FFF, 1797px 33px #FFF, 1192px 20px #FFF, 696px 1277px #FFF, 929px 578px #FFF, 1190px 1532px #FFF, 425px 995px #FFF, 1171px 944px #FFF, 617px 839px #FFF, 574px 365px #FFF, 1830px 1663px #FFF, 1074px 1358px #FFF, 239px 720px #FFF, 1771px 1223px #FFF, 1476px 1844px #FFF, 1756px 100px #FFF, 888px 1498px #FFF, 1798px 121px #FFF, 35px 102px #FFF, 223px 1710px #FFF;
    }

    #stars3 {
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 1827px 1416px #FFF, 1966px 701px #FFF, 1611px 357px #FFF, 926px 702px #FFF, 456px 1192px #FFF, 1552px 927px #FFF, 171px 68px #FFF, 1191px 249px #FFF, 800px 98px #FFF, 427px 1324px #FFF, 685px 411px #FFF, 583px 1241px #FFF, 451px 232px #FFF, 147px 458px #FFF, 263px 254px #FFF, 441px 1336px #FFF, 1297px 1041px #FFF, 1707px 1442px #FFF, 1852px 625px #FFF, 1920px 602px #FFF, 746px 1579px #FFF, 1586px 882px #FFF, 960px 141px #FFF, 158px 1522px #FFF, 1813px 1736px #FFF, 1757px 1383px #FFF, 20px 311px #FFF, 100px 713px #FFF, 260px 1037px #FFF, 1231px 1259px #FFF, 1814px 1142px #FFF, 349px 268px #FFF, 307px 1651px #FFF, 389px 1036px #FFF, 531px 596px #FFF, 207px 871px #FFF, 1968px 1807px #FFF, 1414px 1968px #FFF, 1889px 1756px #FFF, 570px 1540px #FFF, 1692px 1135px #FFF, 457px 611px #FFF, 1863px 797px #FFF, 540px 942px #FFF, 1510px 1964px #FFF, 1191px 1881px #FFF, 1275px 302px #FFF, 373px 1738px #FFF, 710px 1971px #FFF, 1223px 642px #FFF, 422px 11px #FFF, 921px 68px #FFF, 1055px 1180px #FFF, 1269px 1522px #FFF, 1856px 1582px #FFF, 1280px 435px #FFF, 944px 1705px #FFF, 894px 155px #FFF, 1314px 1278px #FFF, 1971px 1881px #FFF, 1345px 932px #FFF, 452px 1154px #FFF, 1181px 361px #FFF, 1167px 721px #FFF, 226px 1027px #FFF, 1771px 1258px #FFF, 142px 651px #FFF, 1132px 15px #FFF, 572px 52px #FFF, 1549px 1035px #FFF, 160px 1774px #FFF, 984px 1179px #FFF, 92px 1342px #FFF, 1243px 496px #FFF, 1617px 1605px #FFF, 398px 249px #FFF, 1185px 747px #FFF, 1522px 1490px #FFF, 472px 362px #FFF, 1787px 930px #FFF, 1975px 1145px #FFF, 949px 943px #FFF, 567px 1434px #FFF, 1707px 1973px #FFF, 867px 663px #FFF, 921px 1759px #FFF, 1324px 1205px #FFF, 51px 49px #FFF, 1626px 452px #FFF, 956px 183px #FFF, 70px 1977px #FFF, 264px 1103px #FFF, 967px 875px #FFF, 528px 1733px #FFF, 1244px 1425px #FFF, 1820px 965px #FFF, 584px 307px #FFF, 512px 257px #FFF, 1613px 65px #FFF, 1378px 514px #FFF;
        animation: animStar 150s linear infinite;
    }

    #stars3:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 1827px 1416px #FFF, 1966px 701px #FFF, 1611px 357px #FFF, 926px 702px #FFF, 456px 1192px #FFF, 1552px 927px #FFF, 171px 68px #FFF, 1191px 249px #FFF, 800px 98px #FFF, 427px 1324px #FFF, 685px 411px #FFF, 583px 1241px #FFF, 451px 232px #FFF, 147px 458px #FFF, 263px 254px #FFF, 441px 1336px #FFF, 1297px 1041px #FFF, 1707px 1442px #FFF, 1852px 625px #FFF, 1920px 602px #FFF, 746px 1579px #FFF, 1586px 882px #FFF, 960px 141px #FFF, 158px 1522px #FFF, 1813px 1736px #FFF, 1757px 1383px #FFF, 20px 311px #FFF, 100px 713px #FFF, 260px 1037px #FFF, 1231px 1259px #FFF, 1814px 1142px #FFF, 349px 268px #FFF, 307px 1651px #FFF, 389px 1036px #FFF, 531px 596px #FFF, 207px 871px #FFF, 1968px 1807px #FFF, 1414px 1968px #FFF, 1889px 1756px #FFF, 570px 1540px #FFF, 1692px 1135px #FFF, 457px 611px #FFF, 1863px 797px #FFF, 540px 942px #FFF, 1510px 1964px #FFF, 1191px 1881px #FFF, 1275px 302px #FFF, 373px 1738px #FFF, 710px 1971px #FFF, 1223px 642px #FFF, 422px 11px #FFF, 921px 68px #FFF, 1055px 1180px #FFF, 1269px 1522px #FFF, 1856px 1582px #FFF, 1280px 435px #FFF, 944px 1705px #FFF, 894px 155px #FFF, 1314px 1278px #FFF, 1971px 1881px #FFF, 1345px 932px #FFF, 452px 1154px #FFF, 1181px 361px #FFF, 1167px 721px #FFF, 226px 1027px #FFF, 1771px 1258px #FFF, 142px 651px #FFF, 1132px 15px #FFF, 572px 52px #FFF, 1549px 1035px #FFF, 160px 1774px #FFF, 984px 1179px #FFF, 92px 1342px #FFF, 1243px 496px #FFF, 1617px 1605px #FFF, 398px 249px #FFF, 1185px 747px #FFF, 1522px 1490px #FFF, 472px 362px #FFF, 1787px 930px #FFF, 1975px 1145px #FFF, 949px 943px #FFF, 567px 1434px #FFF, 1707px 1973px #FFF, 867px 663px #FFF, 921px 1759px #FFF, 1324px 1205px #FFF, 51px 49px #FFF, 1626px 452px #FFF, 956px 183px #FFF, 70px 1977px #FFF, 264px 1103px #FFF, 967px 875px #FFF, 528px 1733px #FFF, 1244px 1425px #FFF, 1820px 965px #FFF, 584px 307px #FFF, 512px 257px #FFF, 1613px 65px #FFF, 1378px 514px #FFF;
    }

    @keyframes animStar {
        from {
            transform: translateY(0px);
        }

        to {
            transform: translateY(-2000px);
        }
    }
</style>

@assets
    <script src="https://cdn.jsdelivr.net/npm/animejs/lib/anime.iife.min.js"></script>
@endassets

<script>
    const {
        animate
    } = anime;

    document.addEventListener('livewire:init', () => {
        Alpine.data('slideshow', () => ({
            autoplayIntervalTime: 10000,
            slides: [{
                    src: 'https://www.hair-charm.com/images/slideshow/slide-1.jpg',
                    description: 'Luxury elite Slavic virgin hair cut on the territory of Ukraine and Russia. Unique opportunity to buy hair straight from the tin',
                },
                {
                    src: 'https://www.hair-charm.com/images/slideshow/slide-2.jpg',
                    description: 'We offer hand tied wefts which are made from Slavic hair double dawn',
                },
                {
                    src: 'https://www.hair-charm.com/images/slideshow/slide-3.jpg',
                    description: 'The individual approach to each customer. You can buy the best hair wholesale or retail',
                },
            ],
            currentSlideIndex: 1,
            isPaused: false,
            autoplayTimer: null,
            startTime: null,
            progress: 0,

            previous() {
                this.resetAutoplay();
                animate('.slide-text', {
                    x: '-100vw',
                    opacity: 0,
                    duration: 500,
                    ease: 'linear',
                    onComplete: () => {
                        this.currentSlideIndex =
                            this.currentSlideIndex > 1 ?
                            this.currentSlideIndex - 1 :
                            this.slides.length;
                        animate('.slide-text', {
                            x: '0%',
                            opacity: 1,
                            duration: 1500,
                            ease: 'outElastic',
                        });
                    }
                });
            },

            next() {
                this.resetAutoplay();
                animate('.slide-text', {
                    x: '-100vw',
                    opacity: 0,
                    duration: 500,
                    ease: 'linear',
                    onComplete: () => {
                        this.currentSlideIndex =
                            this.currentSlideIndex < this.slides.length ?
                            this.currentSlideIndex + 1 : 1;
                        animate('.slide-text', {
                            x: '0%',
                            opacity: 1,
                            duration: 1500,
                            ease: 'outElastic',
                        });
                    }
                });
            },

            autoplay() {
                this.startTime = Date.now();
                this.autoplayTimer = setInterval(() => {
                    if (!this.isPaused) {
                        const elapsed = Date.now() - this.startTime;
                        this.progress = Math.min((elapsed / this.autoplayIntervalTime) *
                            100, 100);
                        if (elapsed >= this.autoplayIntervalTime) {
                            this.next(); // will internally call resetAutoplay()
                        }
                    }
                }, 100);
            },

            resetAutoplay() {
                clearInterval(this.autoplayTimer);
                this.progress = 0;
                this.autoplay();
            },

            init() {
                this.autoplay()
            }
        }));
    });
</script>
