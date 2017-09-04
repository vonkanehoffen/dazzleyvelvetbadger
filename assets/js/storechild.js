/* storechild.js */

(function() {

  const s = Snap("#bg-patterns")
  const circles = []
  const interval = setInterval(() => {

    const circle = s.circle(
      Math.random()*100+'%',
      Math.random()*100+'%',
      20
    )
    circle.attr({
      fill: "#999999",
      stroke: "#abc",
      strokeWidth: Math.random()*10,
    })
    circles.push(circle)

    if(circles.length > 100) {
      circles[0].remove()
      circles.shift()
    }

    circles.forEach(c => {
      c.attr({
        r: Math.abs(Math.sin(
          new Date().getTime()/100
        )*40),
      })
    })
  }, 20)

}).call( this );