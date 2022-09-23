
let current = document.querySelector('#upcoming-events');
current.innerText = ''
current.style.textAlign = 'center'

for(eventItem of EventList['upcoming']){
    eventcontainer = document.createElement('div');
    eventcontainer.style.width = '400px'
    eventcontainer.style.borderRadius = '15px'
    eventcontainer.style.overflow = 'hidden'
    eventcontainer.style.background = 'grey'
    eventcontainer.style.border = 'none'


    newimg = document.createElement('img');
    newimg.setAttribute('src', eventItem['EventGmapPhoto'])
    newimg.style.height = '215px'
    newimg.style.width = '100%'
    newimg.style.objectFit = 'cover'
    eventcontainer.appendChild(newimg)
    
    eventTitle = document.createElement('p');
    eventTitle.innerText = eventItem['EventPlace']
    eventTitle.style.margin = '10px'
    eventTitle.style.fontSize = '25px'
    eventTitle.style.textAlign = 'center'
    eventcontainer.appendChild(eventTitle)

    eventDate = document.createElement('p');
    eventDate.innerText = eventItem['EventDate'] + '\n' + eventItem['EventTime']
    eventDate.style.margin = '10px'
    eventDate.style.fontSize = '20px'
    eventDate.style.textAlign = 'center'
    eventcontainer.appendChild(eventDate)

    //link section
    eventLink = document.createElement('a');
    eventLink.setAttribute('href', eventItem['EventGmaps'])
    eventLink.setAttribute('target', '_blank')
    eventLink.style.textDecoration = 'none'
    eventLink.style.color = 'white'
    eventLink.style.display ='inline-block'
    eventLink.style.padding ='10px'
    eventLink.style.aspectRatio = '4 / 3.25'
    eventLink.appendChild(eventcontainer)

    current.appendChild(eventLink)
}

let past = document.querySelector('#past-events');
past.innerText = ''
past.style.textAlign = 'center'


for(eventItem of EventList['past']){
    eventcontainer = document.createElement('div');
    eventcontainer.style.width = '400px'
    eventcontainer.style.borderRadius = '15px'
    eventcontainer.style.overflow = 'hidden'
    eventcontainer.style.background = 'grey'
    eventcontainer.style.border = 'none'


    newimg = document.createElement('img');
    newimg.setAttribute('src', eventItem['EventGmapPhoto'])
    newimg.style.height = '215px'
    newimg.style.width = '100%'
    newimg.style.objectFit = 'cover'
    eventcontainer.appendChild(newimg)
    
    eventTitle = document.createElement('p');
    eventTitle.innerText = eventItem['EventPlace']
    eventTitle.style.margin = '10px'
    eventTitle.style.fontSize = '25px'
    eventTitle.style.textAlign = 'center'
    eventcontainer.appendChild(eventTitle)

    eventDate = document.createElement('p');
    eventDate.innerText = eventItem['EventDate'] + '\n' + eventItem['EventTime']
    eventDate.style.margin = '10px'
    eventDate.style.fontSize = '20px'
    eventDate.style.textAlign = 'center'
    eventcontainer.appendChild(eventDate)

    //link section
    eventLink = document.createElement('a');
    eventLink.setAttribute('href', eventItem['EventGmaps'])
    eventLink.setAttribute('target', '_blank')
    eventLink.style.textDecoration = 'none'
    eventLink.style.color = 'white'
    eventLink.style.display ='inline-block'
    eventLink.style.padding ='10px'
    eventLink.style.aspectRatio = '4 / 3.25'
    eventLink.appendChild(eventcontainer)

    past.appendChild(eventLink)
}
