function renderLinkedInPost(post) {
  return `
    <div class="post-container">
      <div class="post-header">
        <img src="${post.author.profilePicture}" alt="Profile picture">
        <div class="post-author-info">
          <h5 class="post-author-name">${post.author.name}</h5>
          <span class="post-author-title">${post.author.title}</span>
        </div>
      </div>
      <div class="post-body">
        <p>${post.content}</p>
      </div>
      <div class="post-footer">
        <span class="post-time">${post.time}</span>
        <span class="post-comments-count">${post.comments.length} comments</span>
      </div>
    </div>
  `;
}
