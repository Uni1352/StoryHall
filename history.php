<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>行動故事館</title>
    <link rel="stylesheet" href="./stylesheets/css/normalize.css">
    <link rel="stylesheet" href="./stylesheets/css/style.css">
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <!-- TODO: header & navbar -->
    <header>
        <h1><a href="./index.php" title="回首頁">Mobile Story Hall for Blockchain</a></h1>
        <nav>
            <ul class="menu">
                <li class="menu__item"><a href="./about.php">關於區塊鏈</a></li>
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
                <li class="menu__item"><a href="./history.php">歷史回顧</a></li>
                <li class="menu__item"><a href="./resource.php">學習資源</a></li>
                <!-- <li class="menu__item"><a href="./download.php">下載專區</a></li> -->
                <?php
                if(isset($_SESSION['valid_user'])) {
                    
                ?>  
                <li class="menu__item"><a href="./member.php">會員專區</a></li>
                <?php    
                }
                else
                {
                  
                ?>
                <li class="menu__item"><a href="./login.php">登入</a></li>
                <?php    
                }
                ?>
            </ul>
        </nav>
    </header>
    <!-- TODO: container -->
    <div class="container">
        <div class="container__item" id="blockinfo">
            <div>
                <h2 class="container__title">歷史回顧</h2><br>
                <p class="container__subtitle">整理2008年至2018年間區塊鏈的精彩瞬間，包含中本聰的堀起、比特幣披薩日、挖礦機、乙太坊創立等的時間點及內容。</p>
            </div>
            <div>
                <button id="more">開始閱讀</button>
            </div>
        </div>
        <div class="timeline">
            <ul class="timeline__nav">
                <li><span>2018</span></li>
                <li><span>2017</span></li>
                <li><span>2016</span></li>
                <li><span>2015</span></li>
                <li><span>2014</span></li>
                <li><span>2013</span></li>
                <li><span>2012</span></li>
                <li><span>2011</span></li>
                <li><span>2010</span></li>
                <li><span>2009</span></li>
                <li><span>2008</span></li>
            </ul>
            <div class="timeline__event">
                <div>
                    <h2 class="timeline__title">2018</h2>
                    <div>
                        <h3 class="timeline__subtitle">2018年1月30日，Facebook、google相繼表示禁止所有加密貨幣相關廣告</h3>
                        <p class="timeline__content">2018年1月30日，Facebook宣佈將禁止所有加密貨幣相關廣告，當天比特幣大跌
                            12%。2018年3月14日，穀歌發佈公告稱，將從今年6月開始禁止網路廣告推廣數位貨
                            幣、ICO，及其他投機性金融工具。美元，比特幣當天跌幅超過10%。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline39.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2018年2月4日，區塊鏈首次被列入中國之政府工作報告</h3>
                        <p class="timeline__content">2018年2月4日，杭州市長徐立毅在杭州市兩會上提出，杭州將加快區塊鏈這一未來
                            產業的發展。報告顯示，對杭州未來而言，區塊鏈的地位僅次於“人工智慧”“虛
                            擬實境”，居於“量子技術”之前，位列第三。區塊鏈首次被列入政府工作報告。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline40.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2018年2月25日，拉斯洛再次用比特幣買了兩個披薩</h3>
                        <p class="timeline__content">2018年2月25日，拉斯洛又用比特幣買了兩個披薩，並把照片分享到了網上。不過這
                            次，他只花了0.00649個比特幣。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline41.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2018年2月28日，趙長鵬、周碩基先後登富比士</h3>
                        <p class="timeline__content">《富比士》2018 年 2 月 28 日刊，幣安趙長鵬登上雜誌封面，幣安6個月的逆襲成為
                            行業神話。之後不久FBG 創始人周碩基登上福布斯封面，福布斯用雙關標題“Tricks
                            of a Crypto Trader ”介紹這位低調的“幫主”和他的區塊鏈投資之路。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline42.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2018年4月25日，EOS節點競爭成為大熱點</h3>
                        <p class="timeline__content">說明：2018年10月29日18：00EOS排名前21個節點注釋。
                            EOS採用的DPOS共識機制，簡單地說，就是EOS持有者根據手裡持有的EOS Token來
                            給所有節點競選人投票，得票數量前21位就可以當選主節點。大量資本入場開始了
                            21節點的廝殺，EOS節點選取成為2018年上半年的最大熱點。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline43.jpg" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2018年5月29日，360團隊發現EOS的重大漏洞</h3>
                        <p class="timeline__content">2018年5月29日，360團隊發現EOS的重大漏洞，使得EOS直接站在了風口浪尖上。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline44.jpg" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2018年9月24日，BetDice引爆EOS社區</h3>
                        <p class="timeline__content">2018年9月24日，骰子遊戲BetDice平臺上線，上線三周多，平臺獎池（bankroll）突破
                            20萬EOS，累積成交量超過3400萬EOS，實現利潤55萬EOS，累積向玩家分紅超過27
                            萬EOS。BetDice已經成為EOS公鏈上成交量最大的博彩平臺，連續多日登頂Dapp
                            Raddar，日成交量一度接近950萬EOS。由此，菠菜類遊戲在EOS網路盛行。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline45.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2017</h2>
                    <div>
                        <h3 class="timeline__subtitle">2017年4月17日，EOS 誕生</h3>
                        <p class="timeline__content">2017年4月17日，EOS 誕生，採用DPOS共識機制。在比特股和Steemit之後，BM再次進
                            行了區塊鏈項目的開發，成為了區塊鏈行業唯一三個區塊鏈項目的創始人。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline29.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年6月1日，俄羅斯總統普京會見乙太坊創始人Vitalik</h3>
                        <p class="timeline__content">2017年6月1日，俄羅斯聖彼德堡國際經濟論壇（SPIEF）正式開始，會議期間，俄羅斯
                            總統普京會見了乙太坊創始人維塔利克·巴特林（Vitalik Buterin）。這次談話被稱為是
                            幣圈有史以來最高級別的會談！</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline30.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年6月25日，乙太坊創始人Vitalik通過乙太坊上的Block Number打破死亡傳言</h3>
                        <p class="timeline__content">2017年6月25日，乙太坊創始人Vitalik Buterin在網上曬出一張和乙太坊最新的Block
                            Number的合照打破今日關於自己遭遇車禍身亡的傳言，不愧是天才神童。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline31.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年6月26日，EOS創造ICO新記錄</h3>
                        <p class="timeline__content">2017年6月26日，EOS開始ICO，在5天內籌集了1.85億美金創造了新的ICO記錄。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline32.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年7月20日，趙長鵬創立幣安</h3>
                        <p class="timeline__content">2017年6月9日，趙長鵬開始著手幣安的創建。截至7月2日，幣安ICO共募集價值1,500
                            萬美元的數字資產。幣安在創建初期並未被看好，圈內同行支持者甚少。但在九四之
                            後，國內的主流交易所遭受重創，而趙長鵬憑藉海外身份及此前交易所的豐富經驗讓
                            幣安躋身行業Top。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline33.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年7月，日本成全球最大比特幣交易市場</h3>
                        <p class="timeline__content">2017年7月，比特幣8%的消費稅正式取消。2017年9月19日，國內比特幣交易平臺逐
                            步關停後，日本比特幣交易量急漲，超過美國成為全球最大比特幣交易市場。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline34.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年8月1日，BCH誕生</h3>
                        <p class="timeline__content">2017年8月1日，BCH誕生。第一個Bitcoin Cash區塊由堅定的大區塊支持者楊海坡創
                            立的ViaBTC在區塊高度478559挖出第一個BCH。該區塊包含 6985 筆交易，區塊大小
                            為1.915 MB ，是比特幣原始鏈上區塊大小的近兩倍，交易輸送量也比原始的多出了
                            約3000筆。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline35.jpg" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年8月，中國監管機構全面叫停ICO</h3>
                        <p class="timeline__content">2017年8月國務院法制辦在其官網公佈了《處置非法集資條例（徵求意見稿）》，其
                            中第15條第二款提到，以發行虛擬貨幣為名義籌集資金的行為，如果違反了國家許
                            可和相關法律法規可能會啟動行政調查。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline36.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年11月28日，CryptoKitties 造成乙太坊擁堵</h3>
                        <p class="timeline__content">2017 年 11 月 28 日，CryptoKitties 于乙太坊區塊鏈亮相。CryptoKitties 是一款虛擬的
                            養貓遊戲，玩家可買賣並繁殖不同品種的小貓。每一隻電子貓都身價不菲，最貴的
                            一隻以80萬人民幣成交。。這款應用如病毒般在乙太坊社區蔓延，導致乙太坊網路
                            癱瘓。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline37.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2017年12月17日，比特幣迎來歷史最高價</h3>
                        <p class="timeline__content">據coinmarketcap資料顯示，2017年12月17日上午4：19分左右比特幣價格達到了歷史
                            最高點，20089美元。這輪牛市迎來頂峰。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline38.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2016</h2>
                    <div>
                        <h3 class="timeline__subtitle">2016年5月16日，Fuck your mother if you want fuck</h3>
                        <p class="timeline__content">吳忌寒，有人稱他為中本聰的叛徒，有人根據他名字的拼音“Jihan”，稱他為
                            “JIHAD”（意為恐怖分子）。區塊鏈的權威媒體Coindesk則直接稱他為惡棍
                            （Valient）。2016年5月16日，在Twitter上關於比特幣技術發展路線的分歧，面對網友的
                            “two fucks”，吳忌寒霸氣回應「Fuck your mother if you want fuck」。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline23.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2016年5月25日，日本將比特幣歸類為一種資產或財產</h3>
                        <p class="timeline__content">2016年5月25日，日本參議院批准了一項監管國內數位貨幣交易所的法案，法案將比
                            特幣歸類為一種資產或財產。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline24.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2016年6月17日，The DAO遭駭事件</h3>
                        <p class="timeline__content">The DAO（the Decentralized Autonomous Organization）是一個利用公共區塊鏈
                            Ethereum（以太坊）技術，來打造智能合約平臺的網路組織。2016年6月17日時遭到
                            駭客入侵，盜走了約370萬個以太幣（Ether），約市值五千萬美元的乙太幣被轉移。當
                            日，乙太坊價格從19.42美元跌至11.32美元，跌幅41%。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline25.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2016年7月20日，乙太坊進行硬分叉</h3>
                        <p class="timeline__content">2016年7月20日，因The Dao事件，乙太坊進行硬分叉，所有的乙太幣（包括被移動的
                            ）回歸原處，目前，乙太坊的官方版本ETH，是由其原始開發者進行維護的；乙太經
                            典ETC則是由一個全新團隊進行維護。這是第一次主流區塊鏈為了補償投資人而通過
                            分叉來變更交易紀錄。分叉以前就持有乙太幣的人在分叉後會同時持有ETH和ETC，存
                            在交易所或線上錢包中的乙太幣也不例外。此次分叉衍生出來的兩個市場，總價值達
                            12億美元以上。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline26.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2016年11月9日，川普當選美國總統震動比特幣市場</h3>
                        <p class="timeline__content">2016年11月9日，川普當選美國總統。全球金融市場普跌，而比特幣24小時內交易量
                            上漲5%，價格上漲5%，漲幅超過黃金。比特幣呈現出避險屬性。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline27.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2016年，Don Tapscott 和 Alex Tapscott</h3>
                        <p class="timeline__content">這對父子組合是 2016 年行業重要著作《區塊鏈革命》的作者。Don 和 Alex Tapscott
                            已經成為推動該技術挺進主流金融圈的重要聲音。參加任何一場行業內重要會議，都
                            會看到他們兩人的其中一個，對區塊鏈的廣闊前景作深入演講。同時Don 協助推動了
                            Muskoka Group 的成立。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline28.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2015</h2>
                    <div>
                        <h3 class="timeline__subtitle">2015年1月12日，上一輪的熊市底部</h3>
                        <p class="timeline__content">比特幣從USD 958.37跌到USD 221.29。這一天到達上一輪熊市的底部。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline19_1.png" alt="event">
                            <img src="./images/history/timeline19_2.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2015年1月27日，美國首家持有正規牌照的比特幣交易所Coinbase開幕</h3>
                        <p class="timeline__content">專作「比特幣」（Bitcoin）交易服務的Coinbase公司，日前宣布終於通過法規申請，成為全美首家合法經營比特幣交易服務的公司。
                        </p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline20.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2015年9月15日，R3CEV成立</h3>
                        <p class="timeline__content">分散式帳本初創公司R3CEV 發起R3區塊鏈聯盟，巴克萊，高盛，瑞銀，瑞信，摩根大
                            通在內的9家銀行紛紛加入。2周之後，大摩，美銀，花旗，德銀，法興，三菱紛紛加
                            入。到2015年底，共42家大牌銀行加入，一時風頭無兩。但是R3CEV的Corda項目進展
                            緩慢且陷入財務危機，高盛在內的多家成員紛紛脫離R3聯盟。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline21.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2015年10月31日，經濟學人：區塊鏈，信任的機器</h3>
                        <p class="timeline__content">2015年10月31日，區塊鏈登上《經濟學人》封面，標題為《區塊鏈，信任的機器》，
                            引起社群激烈的討論。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline22.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2014</h2>
                    <div>
                        <h3 class="timeline__subtitle">2014年，咕嚕翻譯乙太坊白皮書</h3>
                        <p class="timeline__content">2014年，咕嚕慧眼識英雄，翻譯乙太坊首款白皮書，同時他也是乙太坊中文命名人。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline14.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2014年2月10日，風雨中的門頭溝（Mt.Gox）</h3>
                        <p class="timeline__content">2014年2月10日，Mt.Gox發出公告稱，因其提現交易受到“偽造交易ID攻擊”，Mt.Gox
                            一共丟失了大約75萬枚比特幣，時價約為3.65億美元。最後，由於資不抵債，Mt.Gox
                            申請破產。事發後，比特幣價格應聲跳水，人們對於比特幣和交易所的信任降至冰點
                            。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline15.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2014年5月，Vitalik第一次來中國被忽視</h3>
                        <p class="timeline__content">2014年5月份， 乙太坊的創始人Vitalik Buterin第一次來到中國，傳播乙太坊理念。當時
                            的現場，一部分人聽得昏昏欲睡，另一部分人在一邊拉盤。沒有幾個人真正在意 Vitalik講了什麼，後來在網上傳播的那張合照，Vitalik躲在後排右邊的第4位，臉還被
                            擋去了部分。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline16_1.png" alt="event">
                            <img src="./images/history/timeline16_2.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2014年6月13日，GHash稱永遠不會發起51%攻擊</h3>
                        <p class="timeline__content">
                            2014年6月13日，礦池GHash.io的算力占比達到51%，引發社區強烈的焦慮情緒。GHash.io發表聲明稱，永遠不會參與51%攻擊，並將算力占比降到39.99%以下。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline17.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2014年7月24日，乙太坊ICO募得三萬多個比特幣</h3>
                        <p class="timeline__content">2014年7月24日，乙太坊進行了為期42天的乙太幣預售（ICO）。在這期間，一共籌集到
                            31,529個比特幣，按比特幣當時的市價來算，超過1800萬美元。對應的，售出
                            60,102,216個乙太幣。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline18.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2013</h2>
                    <div>
                        <h3 class="timeline__subtitle">2013年4月，文克萊沃斯兄弟成比特幣富豪</h3>
                        <p class="timeline__content">2013年4月，比特幣遭遇熊市。文克萊沃斯兄弟經過商議後決定拿出1100 萬美金購
                            入比特幣。在短短的幾個月的時間裡，兄弟二人就買下了12萬比特幣，成為在比特
                            幣世界中已知持有比特幣數量最多的人之一。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline07.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2013年8月19日，德國政府認可了比特幣的法律和稅收地位</h3>
                        <p class="timeline__content">2013年8月19日，德國報導，德國政府認可了比特幣的法律和稅收地位，成為全球第
                            一個正式認可比特幣合法身份的國家。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline08.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2013年10月，吳忌寒創辦比特大陸</h3>
                        <p class="timeline__content">2013年10月，吳忌寒創辦比特大陸，並找到了“技術大腦”的詹克團共同研發螞蟻礦
                            機。而2014年，市場就進入了比特幣的大熊市，比特大陸幾乎破產。從2015年開始
                            ，比特大陸依靠S7礦機和S9礦機躍居行業第一，佔據了比特幣礦機市場70%以上的
                            市場份額，掌握比特幣全網30%左右的算力，吳忌寒因此被稱為“一代礦霸”。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline09.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2013年10月14日，絲綢之路締造者Ross Ulbricht被逮捕</h3>
                        <p class="timeline__content">2013年10月14日，暗網絲綢之路締造者Ross Ulbricht被警方逮捕並判處終身監禁。兩年
                            後，他在家人的幫助下開始發佈Twitter，表示自己遭受了不公正的待遇以及整個調查
                            審判中存在司法操縱政府掩蓋了事實。該條Twitter獲6萬簽名支持，幣圈大佬萊特幣
                            創始人李啟威發佈推特，公開表示自己已加入要求釋放Ross Ulbricht的請願行列，並呼
                            籲大家加入！</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline10.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2013年10月25日，FBI成比特幣新富豪</h3>
                        <p class="timeline__content">在摧毀臭名昭著的暗網販毒窩點“絲綢之路”後，FBI（美國聯邦調查局）查獲了該網
                            站運營商Ross Ulbricht所擁有的144,000枚比特幣。2013年10月25日，FBI成為比特幣新
                            富豪。海盜羅伯茨的傳奇生涯畫上句號，FBI控制了其帳戶上的144,000枚比特幣，並
                            將這些比特幣轉移到了FBI控制的比特幣位址上。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline11.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2013年10月29日，世界首台比特幣ATM於加拿大溫哥華開放使用</h3>
                        <p class="timeline__content">2013年10月29日，世界首台比特幣ATM於加拿大溫哥華開放使用。2013年10月29日，世
                            界首台比特幣ATM於加拿大溫哥華開放使用。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline12.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2013年12月9日，Vitalik Buterin發起Ethereum項目</h3>
                        <p class="timeline__content">2013年12月9日，幣圈天才少年Vitalik Buterin發起Ethereum專案，並發佈了乙太坊白皮
                            書的首個版本。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline13.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2012</h2>
                    <div>
                        <h3 class="timeline__subtitle">2012年7月，烤貓籌募資金生產挖礦機</h3>
                        <p class="timeline__content">2012年7月，天才少年蔣信予用暱稱「烤貓」（friedcat）在比特幣官方論壇bitcointalk上發
                            文聲稱他可以ASIC晶片製造USB挖礦機，並向大眾籌募資金的方式募得資金100萬元。
                            不久烤貓在三個月內透過挖礦業獲利2億。吳忌寒小強等都在前期投資了烤貓股票
                            ，收穫了百倍回報。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline05_1.png" alt="event">
                            <img src="./images/history/timeline05_2.png" alt="event">
                        </div>
                    </div>
                    <div>
                        <h3 class="timeline__subtitle">2012年11月28日，比特幣經歷首次產量減半</h3>
                        <p class="timeline__content">2012年11月28日，比特幣迎來首次產量減半。每個區塊產生的比特幣從50個減少至25
                            個。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline06.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2011</h2>
                    <div>
                        <h3 class="timeline__subtitle">2011年4月23日，中本聰消失</h3>
                        <p class="timeline__content">2011年4月23日，中本聰在最後一封電子郵件中告訴馬提．瑪律密 (Martti Malmi)我已
                            經開始做其他事情了，將來可能不來了。2010年12月13日，中本聰在bitcointalk發表
                            完最後一篇貼文，就默默離開了，未再現身。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline04.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2010</h2>
                    <div>
                        <h3 class="timeline__subtitle">2010年5月22日，比特幣披薩日</h3>
                        <p class="timeline__content">美國程式設計師拉斯洛 (Laszlo Hanyecz) 用10,000個比特幣購買了兩個披薩。這兩個披
                            薩最高價達2億美金，成為歷史上最貴的披薩。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline03.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2009</h2>
                    <div>
                        <h3 class="timeline__subtitle">2009年1月3日，第一枚比特幣問世</h3>
                        <p class="timeline__content">中本聰在位於芬蘭赫爾辛基的一個小型伺服器上，親手創建了比特幣的創世區塊，並
                            獲得了第一筆50枚比特幣的獎勵，第一枚比特幣問世。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline02.png" alt="event">
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="timeline__title">2008</h2>
                    <div>
                        <h3 class="timeline__subtitle">2008年11月1日，比特幣概念問世</h3>
                        <p class="timeline__content">一個化名為中本聰（Satoshi Nakamoto）的神秘密碼學極客在一個隱秘的密碼學評論
                            組上貼出了比特幣白皮書《比特幣白皮書：一種點對點的電子現金系統》。這是一個
                            電子貨幣的新概念，比特幣的概念就此問世。</p>
                        <div class="timeline__image">
                            <img src="./images/history/timeline01.png" alt="event">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./stylesheets/js/timeline.js"></script>
    <!-- <script src="./stylesheets/js/authentication.js"></script> -->
</body>

</html>