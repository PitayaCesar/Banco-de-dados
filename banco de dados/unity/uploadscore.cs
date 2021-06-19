using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class uploadscore : MonoBehaviour
{
    // Start is called before the first frame update
    void Start()
        {
            StartCoroutine(SendScore("Kamomi",100));
        }

        IEnumerator SendScore(string name, int score)
        {
            WWWForm form = new WWWForm();
            form.AddField("playerUser", name);
            form.AddField("playerScore", score);

            using (UnityWebRequest www = UnityWebRequest.Post("http://localhost/unitydb/points.php", form))
            {
                yield return www.SendWebRequest();

                if (www.result != UnityWebRequest.Result.Success)
                {
                    Debug.Log(www.error);
                }
                else
                {
                    Debug.Log("Form upload complete!");
                }
            }
        }
            

    // Update is called once per frame
    void Update()
    {
            
    }
}