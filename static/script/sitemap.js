const sitemapData = [
  {
    title: "Assignment 3",
    links: [
      { text: "View All Courses", href: "index.php" },
      { text: "Create Student", href: "create.php" },
    ],
  },
  {
    title: "GitHub",
    links: [
      {
        text: "Repository",
        href: "https://github.com/rmit-wp-s2-2023/s3958095-a3",
      },
    ],
  },
];

function createSitemapElement(section) {
  let sectionDiv = document.createElement("div");
  let sectionTitle = document.createElement("h3");
  sectionTitle.textContent = section.title;
  sectionDiv.appendChild(sectionTitle);

  let ul = document.createElement("ul");
  section.links.forEach((linkData) => {
    let li = document.createElement("li");
    let a = document.createElement("a");
    a.textContent = linkData.text;
    a.href = linkData.href;
    li.appendChild(a);
    ul.appendChild(li);
  });
  sectionDiv.appendChild(ul);
  return sectionDiv;
}

function generateSitemap() {
  let sitemap = document.getElementById("sitemap");
  sitemapData.forEach((section) => {
    sitemap.appendChild(createSitemapElement(section));
  });
}

window.onload = generateSitemap;
