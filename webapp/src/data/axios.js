import axios from "axios";

export default axios.create({
  baseURL: "http://127.0.0.1/api/locations",
  headers: {
    Accept: "application/json",
  },
});
