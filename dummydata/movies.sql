CREATE TABLE IF NOT EXISTS movies (
    id VARCHAR(36),
    title VARCHAR(255),
    release_year INT UNSIGNED,
    rating FLOAT,
    genre VARCHAR(255),
    poster VARCHAR(255),
    movie_description TEXT
)

INSERT INTO
    movies (
        id,
        title,
        release_year,
        rating,
        genre,
        poster,
        movie_description
    )
VALUES
    (
        '40b5d19b-3513-453f-a2ff-ad47c86b2b57',
        'The Shawshank Redemption',
        1994,
        9.3,
        'Drama',
        'the-shawshank-redemption.jpg',
        'Chronicles the experiences of a formerly successful banker as a prisoner in the gloomy jailhouse of Shawshank after being found guilty of a crime he did not commit. The film portrays the man\'s unique way of dealing with his new, torturous life; along the way he befriends a number of fellow prisoners, most notably a wise long-term inmate named Red'
    ),
    (
        '9a761fb8-7465-4985-983d-5faceb3735f0',
        'The Godfather',
        1972,
        9.2,
        'Crime',
        'the-godfather.jpg',
        'The Godfather \'Don\' Vito Corleone is the head of the Corleone mafia family in New York. He is at the event of his daughter\'s wedding. Michael, Vit\'s youngest son and a decorated WWII Marine is also present at the wedding. Michael seems to be uninterested in being a part of the family business.'
    ),
    (
        '7e3dc43a-4978-4d61-9c9b-d77d859b82a7',
        'The Dark Knight',
        2008,
        9.0,
        'Crime',
        'the-dark-knight.jpg',
        'When a menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman, James Gordon and Harvey Dent must work together to put an end to the madness.'
    ),
    (
        'c5735bbc-7240-490f-9314-33dec51a46d7',
        'Parasite',
        2019,
        8.5,
        'Psychological Thriller',
        'parasite.jpg',
        'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.'
    ),
    (
        '7d4c2842-c8b9-4a12-b4fd-55e5d3176e68',
        'Spirited Away',
        2001,
        8.6,
        'Fantasy',
        'spirited-away.jpg',
        'During her family\'s move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches and spirits, and where humans are changed into beasts.'
    ),
    (
        'f9c27545-fe3c-45f2-9544-879de45af5b8',
        'Akira',
        1998,
        8.0,
        'Sci-fi',
        'akira.jpg',
        'A secret military project endangers Neo-Tokyo when it turns a biker gang member into a rampaging psychic psychopath who can only be stopped by a teenager, his gang of biker friends and a group of psychics.'
    ),
    (
        'a05a89a6-834d-4e0c-9a14-6bb73f1986dc',
        'The Prestige',
        2006,
        8.5,
        'Mystery',
        'the-prestige.jpg',
        'Set in London in the 1800s, two rival magicians read each others diary containing the secrets of their magic tricks and personal life. As we go back in time when the diaries were written, both magicians become obsessed with their rival\'s best trick. The tricks, as shown to the audience, look the same, but neither magician can figure out how his opponent does it.'
    ),
    (
        'e88ad8c6-649a-4f08-b2aa-98b02eab1f82',
        'Alien',
        1979,
        8.5,
        'Sci-fi',
        'alien.jpg',
        'After investigating a mysterious transmission of unknown origin, the crew of a commercial spacecraft encounters a deadly lifeform.'
    ),
    (
        '8d4ce7a5-4acb-4e31-ac6a-3fab65c1866b',
        'No Country for Old Men',
        2007,
        8.2,
        'Crime',
        'no-country-for-old-men.jpg',
        'Violence and mayhem ensue after a hunter stumbles upon the aftermath of a drug deal gone wrong and over two million dollars in cash near the Rio Grande.'
    ),
    (
        '2ce0db9c-597c-4453-9b4a-13972170edcf',
        'Up',
        2009,
        8.3,
        'Adventure',
        'up.jpg',
        '78-year-old Carl Fredricksen travels to South America in his house equipped with balloons, inadvertently taking a young stowaway.'
    ),
    (
        '0e48ca43-529c-4493-a912-dad299697e8e',
        'Interstellar',
        2014,
        8.7,
        'Sci-fi',
        'interstellar.jpg',
        'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.'
    ),
    (
        'b6b5f111-4bff-41e4-a89d-f6cda1c37b77',
        'Se7en',
        1995,
        8.6,
        'psychology',
        'se7en.jpg',
        'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.'
    ),
    (
        '2fbf8a1a-b545-4d47-a557-2fc34ae3d8f9',
        'The Matrix',
        1999,
        8.7,
        'Sci-fi',
        'the-matrix.jpg',
        'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.'
    ),
    (
        'eee5ef7a-ebe1-4a4b-aca4-f142a910ff09',
        'V for Vendetta',
        2005,
        8.1,
        'Political Thriller',
        'v-for-vendetta.jpg',
        'In a future British dystopian society, a shadowy freedom fighter, known only by the alias of \'V\', plots to overthrow the tyrannical government - with the help of a young woman.'
    ),
    (
        'd1eb419a-337f-4b02-b379-d6890aa01006',
        'Howl\'s Moving Castle',
        2004,
        8.2,
        'Adventure',
        'howls-moving-castle.jpg',
        'When an unconfident young woman is cursed with an old body by a spiteful witch, her only chance of breaking the spell lies with a self-indulgent yet insecure young wizard and his companions in his legged, walking castle.'
    );