import React from "react";

const MovieComponent = ({ movie }) => (
  <div className="movie">
    <div className="movie-image">
      <img width="250" src={`https://movie.walkerplus.com${movie.image}`} />
    </div>
    <div className="movie-name">{movie.name}</div>
  </div>
);

export default MovieComponent;