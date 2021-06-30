--ORDER BY
SELECT jog_id, nick, Score FROM jogador_save ORDER BY Score ASC;
SELECT jog_id, nick, Score FROM jogador_save ORDER BY Score DESC;

--GROUP BY

SELECT jog_id, nick, Score FROM jogador_save GROUP BY Score;
SELECT jog_id, nick, Score FROM jogador_save GROUP BY nick;

# HAVING
SELECT jog_id, nick, score FROM jogador_save GROUP BY score HAVING AVG(score) > 100.00;

-- NUMERICAL

SELECT AVG(Score) FROM jogador_save
WHERE Score > 100

-- LITERALS 

SELECT LOWER(nick) FROM jogador_save


