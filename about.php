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
                <li class="menu__item"><a href="./history.php">歷史回顧</a></li>
                <li class="menu__item"><a href="./storyhall.php">行動故事館</a></li>
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
                <h2 class="container__title">關於區塊鏈</h2><br>
                <p class="container__subtitle">介紹區塊鏈基礎知識：區塊鏈源起、區塊鏈及比特幣，從中心化演化至區塊鏈3.0各階段的說明，及區塊鏈運作的流程。</p>
            </div>
            <div>
                <button id="more">開始閱讀</button>
            </div>
        </div>
        <div id="blockcontent">
            <div class="container__item" id="sidebar">
                <ul class="menu menu--col" id="tabs">
                    <li class="menu__item"><a href="#info">區塊鏈基礎知識</a></li>
                    <li class="menu__item"><a href="#evolution">區塊鏈的演化</a></li>
                    <li class="menu__item"><a href="#work">區塊鏈的運作模式</a></li>
                </ul>
            </div>
            <div class="container__item" id="info">
                <h2 class="container__title">區塊鏈基礎知識</h2>
                <div>
                    <h3 class="container__subtitle">區塊鏈源起</h3>
                    <div>
                        <h4>拜占庭問題</h4>
                        <p class="container__content">
                            關於區塊鏈的起源有兩個故事可以討論：首先是今日土耳其的伊斯坦布爾，是當年東羅馬帝國的首都拜占庭，當時東羅馬帝國強盛、國土遼闊，在國防的配置上，每一個軍隊的駐點都相隔遙遠，將軍與將軍之間只能夠依靠信差來傳遞重要消息，因此在對外作戰的時候，拜占庭軍內部所有的將軍和大官員需要達成一致的共識，才能夠決定是否出兵，但若軍隊中存有叛徒或是間諜更可能影響將軍的判斷，結果往往不能夠得到大多數人的意見，在已知有成員謀反的情況如何連結相隔遙遠的軍營來取得一致協議，就成了有名的「拜占庭問題
                            ( The Byzantine Generals Problem )」。</p>
                        <div class="container__image">
                            <img src="./images/about/about01.png" alt="The Byzantine Generals Problem">
                        </div>
                        <p class="container__content">拜占庭將軍問題在網路世界的解讀是在容許入侵體系的一種模型化，後來發現區塊和區塊鏈可以解決這個問題，1982年美國計算機科學家
                            Leslie
                            Lamport
                            把軍中各地軍隊彼此取得共識、決定是否出兵的過程，延伸至運算領域，設法建立具容錯性的分散式系統，即使部分節點失效仍可確保系統正常運行，可讓多個基於零信任基礎的節點達成共識，並確保資訊傳遞的一致性，而
                            2008 年出現的比特幣區塊鏈便應用了此觀念。</p>
                    </div>
                    <div>
                        <h4>比特幣</h4>
                        <p class="container__content">
                            第二個也就是大家所熟知的區塊鏈起源就是「比特幣」，為了比特幣而產生了區塊鏈，比特幣就是區塊鏈的第一個應用，後面的段落會再針對比特幣做詳細說明，接下來我們先來試著了解區塊鏈到底是什麼。
                        </p>
                    </div>
                </div>
                <div>
                    <h3 class="container__subtitle">區塊鏈（Blockchain）</h3>
                    <div>
                        <h4>區塊鏈是什麼？</h4>
                        <p class="container__content">首先，對區塊鏈需要的第一個理解是，它是一種「將資料寫錄的技術」。如同前述，區塊鏈起源於中本聰 ( Satoshi Nakamoto
                            )的比特幣，因此區塊鏈就是作為比特幣的底層技術，是一個「去中心化的分散式資料庫」，透過集體維護讓區塊鏈裡面的資料更可靠，或是可以把它理解成是一個全民皆可參與的電子記帳本，一筆一筆的交易資料都可以被記錄。
                            區塊鏈技術可以說是互聯網時代以來，最具顛覆性的創新技術，依靠複雜的密碼學來加密資料，再透過巧妙的數學分散式演算法，讓互聯網最讓人擔憂的安全信任問題，可以在不需要第三方介入的前提下讓使用者達成共識，以非常低的成本解決了網路上信任與資料價值的難題。
                        </p>
                    </div>
                    <div>
                        <h4>區塊鏈特性</h4>
                        <ul class="container__list" style="list-style-type: disc">
                            <li class="container__listItem">去中心化
                                <p class="container__content">
                                    為了強調區塊鏈的共享性，讓使用者可以不依靠額外的管理機構和硬體設施、讓它不需要中心機制，因此每一個區塊鏈上的資料都分別儲存在不同的雲端上，計算和儲存都是分散式的，每個節點都需要自我驗證、傳遞和管理，去中心化是區塊鏈最突出也是最核心的本質特色。
                                    在去中心化的前提之上，每個運算節點的運作方式就會透過「工作量證明機制（Proof of
                                    Work，POW）」來進行，也就是誰先花費最少的時間，透過各自的運算資源來算出答案並得到認可它就成立，如此一來就可以實現多方共同維護，讓交易可以被驗證。</p>
                            </li>
                            <li class="container__listItem">開放性
                                <p class="container__content">
                                    區塊鏈技術的基礎是開源的，除了其中交易的訊息會另外被加密之外，其中所有的運算數據都是對所有人開放，任何人都可以透過公開的介面去查詢區塊鏈中的數據，系統信息非常透明。
                                </p>
                            </li>
                            <li class="container__listItem">獨立性
                                <p class="container__content">指的是整個區塊鏈系統不需要依靠第三方，因此便不會受到任何外力的干預。</p>
                            </li>
                            <li class="container__listItem">安全性
                                <p class="container__content">
                                    因為區塊鏈數據是分散式的演算，因此也沒有人可以隨意修改網路上的數據，去除掉了人為操控的可能，也就讓區塊鏈本身相對安全。</p>
                            </li>
                            <li class="container__listItem">匿名性
                                <p class="container__content">因為區塊鏈上的訊息不需要公開驗證，彼此之間的訊息傳遞都可以匿名進行。</p>
                            </li>
                            <li class="container__listItem">不可竄改性
                                <p class="container__content">區塊鏈中的每一筆資料一旦寫入就不可以再改動，只要資料被驗證完就永久的寫入該區塊中，其中的技術是透過
                                    Hashcash
                                    演算法，透過一對一的函數來確保資料不會輕易被竄改，這種函數很容易可以被驗證但卻非常難以破解，無法輕易回推出原本的數值，資料也就不能被竄改，每個區塊得出的值也會被放進下一個區塊中，讓區塊鏈之間的資料也都被正確的保障。
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>區塊鏈的顛覆性？</h4>
                        <p class="container__content">
                            區塊鏈就像是當年的網路一樣，會改變許多行業的運作規則。政府、金融、物流、創意產業都積極投入研究區塊鏈。區塊鏈的重要功用是數位資產的防偽，這是電腦、網路普及之後，全球才開始面臨的新問題。
                            現在有很多法規、業界慣例，是只承認實體文件的有效性，但電子文件卻沒有同等地位。因為實體資產的防偽，是很早就開始發展的技術，例如浮水印或雷射標籤。但是，數位資產的防偽卻遲遲沒有好解法，區塊鏈填補了這個空缺。而且，實體鈔票上的浮水印技術很難應用到精品皮包上，但是區塊鏈的防偽技術卻能在各種數位資產間通用。
                        </p>
                    </div>
                    <div>
                        <h4>區塊鏈有哪些常見的應用？</h4>
                        <p class="container__content">
                            區塊鏈才剛開始發展，沒有常見的應用，更沒有非區塊鏈不可的應用。最常見的就是比特幣區塊鏈（Bitcoin）這套轉帳系統，它將區塊鏈當成是數位貨幣的防偽技術，但目前持有比特幣（BTC）、使用過的人仍然是少數[2]。
                            本站內有區塊鏈在選舉、醫療、保險、國際貿易、生産履歷等應用實例的故事動畫及測驗，可以至網站上的故事館內瀏覽並可從測驗中了解其認知程度。</p>
                    </div>
                </div>
                <div>
                    <h3 class="container__subtitle">比特幣（Bitcoin）</h3>
                    <div>
                        <h4>比特幣是什麼？</h4>
                        <p class="container__content">比特幣是由中本聰（Satoshi Nakamoto）於 2008
                            年提出的概念，包含比特幣區塊鏈（Bitcoin）這套轉帳系統，以及比特幣（BTC）這個數位貨幣。這套系統開發至今已屆滿 10 年。
                            比特幣總量固定（2,100 萬枚）供給有限，若越多人想買（需求越多），價格就會越高。道理和股票漲跌相同，是簡單的供需法則。
                            有兩種人會買比特幣：想使用比特幣區塊鏈（Bitcoin）這套轉帳系統的使用者、預期比特幣（BTC）未來會漲價的投資者。</p>
                    </div>
                    <div>
                        <h4>如何獲得比特幣？</h4>
                        <p class="container__content">兩種方式：用電腦挖礦、到交易所買幣。
                            用挖礦來獲得比特幣，就像是自己養牛來生產牛奶。到交易所買比特幣，就像是到超市買牛奶。兩種方式花費的時間、金錢成本各不相同。
                            「挖礦」是一套吸引大家貢獻自己電腦運算資源的獎勵機制，電腦運算資源會幫助比特幣區塊鏈運作。挖礦獎勵是每 10 分鐘提供 12.5
                            枚比特幣（時價）。透過電腦「挖礦」賺取比特幣的人，就稱為礦工。
                            「買幣」得透過數位貨幣交易所，道理就像是買賣美金、日幣也得透過匯兌所一樣。雖然一枚比特幣價值數千美金，但是你也可以用 100 元台幣到全家、萊爾富超商，買等值的零點幾枚比特幣。</p>
                    </div>
                    <div>
                        <h4>比特幣跟區塊鏈的關係是？</h4>
                        <p class="container__content">比特幣區塊鏈（Bitcoin）是一套仰賴「存簿記帳」的轉帳系統。就像你可以透過 ATM
                            轉帳新台幣一樣，你也可以透過比特幣區塊鏈轉帳比特幣（BTC）。
                            存簿上記錄的是誰在什麼時候轉了多少錢。差別在於 ATM 是由「銀行」來確保轉帳紀錄的正確性，而比特幣是由「區塊鏈技術」擔保轉帳紀錄正確性。
                            簡單來說，區塊鏈就是比特幣（數位貨幣）的防偽（tamper proof）機制。</p>
                    </div>
                </div>
                <div>
                    <h3 class="container__subtitle">參考資料</h3>
                    <ol class="container__list" style="line-height: 2.5rem">
                        <li class="container__listItem">
                            <a href="https://www.mile.cloud/zh-hant/what-is-blockchain/"
                                target="_blank">CloundMile，「區塊鏈」到底是什麼？專業懶人包在這裡</a>
                        </li>
                        <li class="container__listItem">
                            <a href="https://blocktrend.today/blockchain-101" target="_blank">區塊勢，區塊鏈懶人包</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="container__item" id="evolution">
                <h2 class="container__title">區塊鏈的演化</h2>
                <div class="container__image">
                    <img src="./images/about/about02.png" alt="Evolution of Blockchain">
                </div>
                <div>
                    <h3 class="container__subtitle">沒有區塊鏈之前：中心化的世界</h3>
                    <p class="container__content">所有的交易必須有一個中介機構、交易所在中心做媒合，這些中心保存所有交易紀錄，讓全球經濟、金融體系可以運轉。
                        例如A要轉帳給B，必須透過銀行作為中介；銀行之間要轉帳，也得透過中介機構（例如：財金公司），使用者皆需負擔手續費，相關紀錄也留存在交易中心。</p>

                    <h3 class="container__subtitle">區塊鏈1.0：比特幣－去中心化的開始</h3>
                    <p class="container__content">比特幣（Bitcoin）開創了一種新的記帳方式，以「分散式帳本」（Distributed
                        Ledger）跳過中介銀行，讓所有參與者的電腦一起記帳，做到去中心化的交易系統。
                        這個交易系統上有兩種人，一是純粹的交易者，一是提供電腦硬體運算能力的礦工。交易者的帳本，需經過礦工運算後加密，經所有區塊鏈上的人確認後上鏈，理論上不可竄改、可追蹤、加密安全。
                        礦工運算加密的行為稱為Hash，因為幫忙運算，礦工可獲得定量比特幣作為酬勞。交易帳本分散在每個人手中，不需中心儲存、認證，所以稱為「去中心化」。
                        無論是個人對個人、銀行對銀行，彼此都能互相轉帳，再也不用透過中介機構，可省下手續費；交易帳本經過加密，分散儲存，比以往更安全、交易紀錄更難被竄改。</p>

                    <h3 class="container__subtitle">區塊鏈2.0：以太坊－智能合約認證</h3>
                    <p class="container__content">跟比特幣相比，以太坊（Ethereum）是多了「智能合約」的區塊鏈底層技術。
                        智能合約是用程式寫成的合約，不會被竄改，會自動執行，還可搭配金融交易。因此，許多區塊鏈公司透過它來發行自己的代幣。
                        智能合約可用來記錄股權、版權、智慧財產權的交易、也有人用它來記錄醫療、證書資訊。因此開啟比特幣等虛擬貨幣之外，區塊鏈應用的無限可能性。
                        例如食品產業的應用，從原料生產、加工、包裝、配送到上架，所有資料都會被寫入區塊鏈資料庫，消費者只要掃讀包裝條碼，就能獲取最完整的食品生產履歷；
                        在旅遊住宿方面，再也不需要透過Airbnb等中介平台，屋主直接在區塊鏈住宿平台上刊登出租訊息，就可以找到房客，並透過智能合約完成租賃手續，不需支付平台任何費用。
                        以後，歌手不用再透過唱片公司，自己就可以在區塊鏈打造的音樂平台上發行專輯，透過智慧合約自動化音樂授權和分潤；聽眾每聽一首歌，就可以直接付錢給創作團隊，不需透過Spotify等線上音樂中介平台。
                    </p>

                    <h3 class="container__subtitle">區塊鏈3.0：IOTA－連接實體生活、物聯網</h3>
                    <p class="container__content">IOTA的技術可解決比特幣、以太坊等現有區塊鏈因礦工有限，出現交易緩慢、貧富差距、難以規模化的問題。
                        IOTA透過較為簡單的演算法，讓每個鏈上的交易者都可以參與加密，且不需全體認證，不需礦工，可以加快加密時間。因此能進行物與物之間非常小、但頻率高的交易。
                        例如：電動車充電時，電動車、充電站可以自己驗證機器的身分。車子有自己的錢包，自動付錢給充電站，不假人工。
                        一般預測，IOTA適用於物聯網及微型支付。目前自駕車、智慧能源業者，也都在實驗IOTA技術。
                        例如透過區塊鏈連結同一社區住戶的太陽能板、電網及儲能設備，讓住戶可以直接向鄰居購買或販售多餘的太陽能電力；或應用在電動車充電站：自家電動車的充電樁可以共享。透過智慧合約（有交易，即付款）不需設專人收錢，可解決公共充電樁過少的問題
                    </p>
                </div>
                <div>
                    <h3 class="container__subtitle">參考資料</h3>
                    <ol class="container__list" style="line-height: 2.5rem">
                        <li class="container__listItem">
                            <a href="https://www.cw.com.tw/article/article.action?id=5090842"
                                target="_blank">天下雜誌，不懂技術沒關係！圖解告訴你區塊鏈可以這樣用</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="container__item" id="work">
                <h2 class="container__title">區塊鏈的運作模式－以比特幣為例</h2>
                <div>
                    <h3 class="container__subtitle">用戶間的交易流程</h3>
                    <p class="container__content">用戶雙方需要透過比特幣錢包(Bitcoin
                        wallet)進行交易，比特幣錢包是一個應用程式，可安裝於電腦或手機。不同於傳統銀行帳戶以餘額呈現的管理方式，比特幣錢包將每筆交易分開列示，且分別記錄代表款項來源的輸入(input)
                        和款項用途的輸出(output)，收到的比特幣在尚未花費前稱為未使用的交易輸出 (Unspent Transaction Output,
                        UTXO)，而未使用交易輸出將會是下一筆輸入。以每筆交易為基礎的記帳方式有助追蹤軌跡，然而，若要得知帳戶餘額，則必須追溯整個交易歷史方能推算。</p>
                    <div class="container__image">
                        <img src="./images/about/about03_1.png" alt="比特幣交易紀錄方式">
                        <p class="container__imageInfo">圖1：比特幣交易紀錄方式</p>
                    </div>
                    <p class="container__content">每筆交易都有專屬的公鑰、私鑰以及比特幣位址(Bitcoin
                        address)。公鑰為公開發布供驗證程序使用，私鑰則如同提款卡或銀行帳戶的密碼，用於證明對比特幣的所有權以發送款項，而位址的功能在於接收款項，實際運作方式如圖2，當 A 進行轉帳給
                        B
                        時，需要 B
                        提供利用其公鑰經雜湊函數運算後（即公開金鑰散列）生成的比特幣位址，併同 A
                        使用自己的私鑰簽署所產生的電子簽名以及當初收款使用的錢包位址，將資料經由網路傳送至各節點進行檢驗。若經節點確認並同意交易，將資料記錄到區塊鏈後，該款項即從
                        A 錢包地址轉移到 B 錢包地址。故從運作流程可知，任何人皆可透過區塊鏈上的公鑰和地址查詢每一筆交易，但必須擁有私鑰才能動用地址內的比特幣。</p>
                    <div class="container__image">
                        <img src="./images/about/about03_2.png" alt="比特幣交易運作方式">
                        <p class="container__imageInfo">圖2：比特幣交易運作方式</p>
                    </div>
                </div>
                <div>
                    <h3 class="container__subtitle">區塊鏈的紀錄</h3>
                    <ol class="container__list">
                        <li class="container__listItem">產生新交易
                            <p class="container__content">接續前段，交易資料經網路傳遞，意即每當有新交易產生，系統會廣播(broadcast)至網路中的各節點。</p>
                        </li>
                        <li class="container__listItem">整合區塊的交易內容
                            <p class="container__content">各節點定期整合未確認的交易，查證其付款位址是否有足夠餘額支付轉帳款項並驗證簽章的正確性，接著將這些交易的 hash
                                值蒐集到區塊中，因此每個區塊包含多筆交易。</p>
                        </li>
                        <li class="container__listItem">決定負責驗證的節點
                            <p class="container__content">透過工作量證明及計算速度決定添加新區塊權利的節點。</p>
                        </li>
                        <li class="container__listItem">將區塊廣播給各節點
                            <p class="container__content">最先完成工作的節點將自己的區塊廣播給各節點。</p>
                        </li>
                        <li class="container__listItem">各節點確認後接上區塊
                            <p class="container__content">其他節點確認該區塊內容的有效性，一旦接受(accept)該區塊，該區塊才正式連接上區塊鏈，無法再更動資料。</p>
                        </li>
                        <li class="container__listItem">再次進行創造區塊的流程
                            <p class="container__content">其他節點接受該區塊代表會利用該區塊的 hash 值計算下一個區塊的工作量證明，啟動創造接續新區塊的流程。</p>
                        </li>
                    </ol>
                    <div class="container__image">
                        <img src="./images/about/about03_3.png" alt="區塊鏈運作流程">
                        <p class="container__imageInfo">圖3：區塊鏈運作流程</p>
                    </div>
                </div>
                <div>
                    <h3 class="container__subtitle">參考資料</h3>
                    <ol class="container__list" style="line-height: 2.5rem">
                        <li class="container__listItem">謝蕙如，2018，出國報告：參加 2018
                            年荷蘭央行「內部稽核之現況與發展趨勢」研討會心得報告，P.13-P.15</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <script src="./stylesheets/js/tabs.js"></script>
    <!-- <script src="./stylesheets/js/authentication.js"></script> -->
</body>

</html>