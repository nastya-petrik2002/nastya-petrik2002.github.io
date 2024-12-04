<!DOCTYPE html>
<html lang="uk-ua">
<head>
    <meta charset="UTF-8">
    <title>Новини | Запорізький окружний адміністративний суд</title>

    <link href="../header/header7.css" rel="stylesheet" >
    <link href="./index1.css" rel="stylesheet" >
    <link href="../footer/footer2.css" rel="stylesheet" >

    <link rel="shortcut icon" href="../../../public/Emblema.ico" type="image/x-icon" >

    <link href="./itc-slider1.css" rel="stylesheet">
    <script src="./itc-slider1.js" defer></script>
</head>
<body>
    <script src="../header/header8.js"></script>
    <div class="content">
        <div class="news">
            <h1>Новини</h1>
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
                        const newsData = await loadJson('../main/news6.json');
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
        </div>
    </div>
    <script src="../footer/footer6.js"></script>
</body>
</html>

