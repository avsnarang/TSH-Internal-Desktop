function clearCookies(
  wildcardDomain = false,
  primaryDomain = true,
  path = null
) {
  pathSegment = path ? "; path=" + path : "";
  expSegment = "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  document.cookie.split(";").forEach(function (c) {
    primaryDomain &&
      (document.cookie = c
        .replace(/^ +/, "")
        .replace(/=.*/, expSegment + pathSegment));
    wildcardDomain &&
      (document.cookie = c
        .replace(/^ +/, "")
        .replace(
          /=.*/,
          expSegment + pathSegment + "; domain=" + document.domain
        ));
  });
}
