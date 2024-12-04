<!DOCTYPE html>
<html lang="uk-ua">
<head>
    <meta charset="UTF-8">
    <title>Запорізький окружний адміністративний суд</title>

    <link href="../header/header7.css" rel="stylesheet" >
    <link href="./index14.css" rel="stylesheet" >
    <link href="../footer/footer2.css" rel="stylesheet" >

    <link rel="shortcut icon" href="../../../public/Emblema.ico" type="image/x-icon" >

    <link href="./itc-slider1.css" rel="stylesheet">
    <script src="./itc-slider1.js" defer></script>
</head>
<body>
    <script src="../header/header8.js"></script>
    <div class="content">
        <div class="content_hed">
            <div class="content_one_h">
                <div class="container_one" id="container_one_1">
                    <div class="itc-slider" data-autoplay="true" data-interval="5000" data-loop="true" data-slider="itc-slider">
                        <div class="itc-slider__wrapper">
                            <div class="itc-slider__items">
                                <div class="itc-slider__item">
                                    <a href="#">
                                        <img src="../../../public/slide_1.jpg" alt="first_slide"><br>
                                    </a>
                                </div>
                                <div class="itc-slider__item">
                                    <a href="#">
                                        <img src="../../../public/slide_2.jpg" alt="second_slide"><br>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="itc-slider__btn itc-slider__btn_prev"></button>
                        <button class="itc-slider__btn itc-slider__btn_next"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_table">
            <div class="small_table">
                <div class="one_box_of_table">
                    <p></p>
                </div>
            </div>
            <div class="small_table">
                <div class="one_box_of_table">
                    <img src="../../../public/mon.png" alt="money">
                    <p>Судовий збір</p>
                </div>
            </div>
            <div class="small_table">
                <div class="one_box_of_table">
                    <img src="../../../public/com.png" alt="computer">
                    <p>Електронний суд</p>
                </div>
            </div>
            <div class="small_table">
                <div class="one_box_of_table">
                    <img src="../../../public/fil.png" alt="file">
                    <p>Стан розгляду справ</p>
                </div>
            </div>
            <div class="small_table">
                <div class="one_box_of_table">
                    <img src="../../../public/time.png" alt="timetable">
                    <p>Розклад засідань</p>
                </div>
            </div>
            <div class="small_table">
                <div class="one_box_of_table">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="last_news">
            <h1>Останні новини</h1>
            <div class="news-container" id="news-container"></div>
            <script>
                async function loadJson(url) {
                    const response = await fetch(url);
                    if (!response.ok) {
                        throw new Error(`Не вдалося завантажити ${url}: ${response.statusText}`);
                    }
                    return await response.json();
                }
                async function loadData() {
                    try {
                        const newsData = await loadJson('news6.json');
                        const newsContainer = document.getElementById('news-container');
                        const latestNews = newsData.новини.slice(-6).reverse();
                        latestNews.forEach(news => {
                            const truncatedTitle = news.заголовок.length > 140 ? news.заголовок.slice(0, 140) + '...' : news.заголовок;
                            const newsElement = document.createElement('div');
                            newsElement.className = 'news-item';
                            newsElement.innerHTML = `
                                <div class="news_div">
                                    <img src="${news.заголовочне_фото}" alt="${news.заголовок}" style="height: 100px; width: auto;">
                                    <p><em>${news.дата}, ${news.час}</em></p>
                                    <h3 style="font-weight: lighter; margin: 10px 5px 15px 5px;">${truncatedTitle}</h3>
                                </div>
                            `;
                            newsContainer.appendChild(newsElement);
                        });
                    } catch (error) {
                        console.error('Помилка при завантаженні даних:', error);
                    }
                }
                document.addEventListener('DOMContentLoaded', loadData);
            </script>
            <div class="div_button">
                <a href="../News/index1.php">
                    <div class="button_more_news">
                        БІЛЬШЕ НОВИН
                    </div>
                </a>
            </div>
        </div>
        <div class="judicial_activity">
            <h1>Судово-адміністративна діяльність</h1>
            <div class="activity_boxes">
                <div class="active_1">
                    <a href="#">
                        <div class="active_box">
                            Судові засідання он-лайн
                        </div>
                    </a>
                    <a href="#">
                        <div class="active_box">
                            Оголошення про розгляд справ
                        </div>
                    </a>
                </div>
                <div class="active_1">
                    <a href="#">
                        <div class="active_box">
                            Система ВКЗ
                        </div>
                    </a>
                    <a href="#">
                        <div class="active_box">
                            Електронний суд
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="links">
            <h1>Корисні посилання</h1>
            <div class="all_links">
                <a href="https://www.president.gov.ua">
                    <div class="div_a">
                        <p>Президент України</p>
                        <img src="../../../public/president.png" alt="president">
                    </div>
                </a>
                <a href="https://www.rada.gov.ua">
                    <div class="div_a">
                        <p>Верховна Рада України</p>
                        <img src="../../../public/gerb.png" alt="rada">
                    </div>
                </a>
                <a href="https://www.kmu.gov.ua">
                    <div class="div_a">
                        <p>Кабнет Міністрів України</p>
                        <img src="../../../public/gerb.png" alt="kmu">
                    </div>
                </a>
                <a href="https://www.echr.coe.int">
                    <div class="div_a">
                        <p>Європейський суд з прав людини</p>
                        <img src="../../../public/echr.png" alt="echr">
                    </div>
                </a>
                <a href="https://supreme.court.gov.ua/supreme/">
                    <div class="div_a">
                        <p>Верховний Суд</p>
                        <img src="../../../public/gerb.png" alt="supreme">
                    </div>
                </a>
                <a href="https://reyestr.court.gov.ua">
                    <div class="div_a">
                        <p>Єдиний державний реєстр судових рішень</p>
                        <img src="../../../public/gerb.png" alt="reyestr">
                    </div>
                </a>
                <a href="https://erau.unba.org.ua">
                    <div class="div_a">
                        <p>Єдиний реєстр адвокатів</p>
                        <img src="../../../public/erau.png" alt="erau">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="../footer/footer6.js"></script>
</body>
</html>

